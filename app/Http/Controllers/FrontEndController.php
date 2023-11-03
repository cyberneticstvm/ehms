<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use App\Models\Tenant;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Config;

class FrontEndController extends Controller
{
    public function requestDemo(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'mobile' => 'required|numeric|digits:10|unique:demo_requests,mobile',
                'email' => 'required|email|unique:demo_requests,email',
            ]);
            DemoRequest::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'message' => $request->message,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'status' => 'error',
            ]);
        }
        return response()->json([
            'message' => 'Thank you for your request! Our team will reach out you shortly.',
            'status' => 'success',
        ]);
    }

    public function register()
    {
        return view('register');
    }

    public function registerTenant(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required|numeric|digits:10|unique:users,mobile',
            'email' => 'required|email|unique:users,email',
            'subdomain' => 'required|unique:users,subdomain',
            'username' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);
        try {
            DB::transaction(function () use ($request) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'subdomain' => $request->subdomain,
                ]);

                Tenant::create([
                    'user_id' => $user->id,
                    'subdomain' => $request->subdomain,
                    'domain' => $request->subdomain . '.' . Config::get('tenant.app_main_domain'),
                    'database' => Config::get('tenant.tenant_db_prefix') . $request->subdomain,
                    'db_user' => $request->username,
                    'db_password' => $request->password,
                    'status' => 'active',
                    'expired_on' => Carbon::today()->addDays(365)->toDate(),
                ]);
            });
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Tenant registered successfully!");
    }
}
