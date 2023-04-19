<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/check');
    }

    public function check()
    {
        return view('admin.auth.login');
    }
    public function login(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect('admin');
        } else {
            return redirect('admin/check');
        }
    }
    public function store(Request $request)
    {
        $admin = new  Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->save();
    }

    public function index()
    {

        // return view('admin.type.index');
        return view('admin.index');
    }
}
