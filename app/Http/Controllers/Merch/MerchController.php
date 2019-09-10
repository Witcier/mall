<?php

namespace App\Http\Controllers\Merch;

use Illuminate\Http\Request;
use App\Merch;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MerchController extends Controller
{
    public function index()
    {
        return view('merch.index');

    }

    public function login()
    {
        return view('merch.auth.login');
    }

    public function actlogin(Request $request)
    {
        $data = $request->only('email','password');

        if (!auth()->guard('merch')->attempt($data)){
            return redirect('merch/login');
        }else{
            return redirect('merch/');
        }

    }

    public function logout()
    {
        auth()->guard('merch')->logout();

        return redirect('merch/login');
    }

}
