<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Tenant;
use App\Models\User;
use App\Models\UserBranch;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Hash;
use DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    public function login()
    {
        $subdomain = explode('.', $_SERVER['HTTP_HOST'])[0];
        if ($subdomain != env('APP_MAIN_DOMAIN')) :
            $tenant = Tenant::where('subdomain', $subdomain)->where('status', 'active')->whereDate('expired_on', '>=', Carbon::today())->first();
            if ($tenant) :
                return view('backend.login');
            else :
                return redirect()->route('landing')->with("error", "Unauthorized Access!");
            endif;
        else :
            return view('index');
        endif;
    }

    public function signin(Request $request)
    {
        $cred = $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($cred, $request->remember)) :
            return redirect()->route('dashboard')->withSuccess(Auth::user()->name . " logged in successfully!");
        endif;
        return redirect()->route('login')
            ->withError('Invalid Credentials!')->withInput($request->all());
    }

    public function dashboard()
    {
        $branches = Branch::whereIn('id', UserBranch::where('user_id', Auth::id())->pluck('branch_id'))->pluck('name', 'id');
        return view('backend.dashboard', compact('branches'));
    }

    public function updateBranch(Request $request)
    {
        Session::put('branch', $request->branch);
        if (Session::has('branch')) :
            return redirect()->route('dashboard')
                ->withSuccess('User branch updated successfully!');
        else :
            return redirect()->route('dashboard')
                ->withError('Please update branch!');
        endif;
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('User logged out successfully!');
    }

    public function index()
    {
        $users = User::withTrashed()->latest()->get();
        return view('backend.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        $branches = Branch::pluck('name', 'id');
        return view('backend.user.create', compact('roles', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric|digits:10',
            'password' => 'required|confirmed',
            'roles' => 'required',
            'branches' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        $data = [];
        foreach ($request->branches as $key => $br) :
            $data[] = [
                'user_id' => $user->id,
                'branch_id' => $br,
            ];
        endforeach;
        UserBranch::insert($data);
        return redirect()->route('users')
            ->with('success', 'User has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail(decrypt($id));
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        $branches = UserBranch::where('user_id', decrypt($id))->get();
        return view('backend.user.edit', compact('user', 'roles', 'userRole', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'mobile' => 'required|numeric|digits:10',
            'roles' => 'required',
            'branches' => 'required',
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::findOrFail($id);
        $user->update($input);
        $data = [];
        foreach ($request->branches as $key => $br) :
            $data[] = [
                'user_id' => $user->id,
                'branch_id' => $br,
            ];
        endforeach;
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        UserBranch::where('user_id', $id)->delete();
        UserBranch::insert($data);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users')
            ->with('success', 'User has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail(decrypt($id))->delete();
        return redirect()->route('users')
            ->with('success', 'User deleted successfully');
    }
}
