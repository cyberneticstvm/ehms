<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use Exception;
use Illuminate\Http\Request;

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
}
