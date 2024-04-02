<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use DB;
use Session;

class AdminController extends Controller
{
    public function Loginpage()
    {
      if(session()->has('adminsession')){
        return redirect('/dashboard');
      }else{
        return view('admin.login');
      }
    }
    public function adminLogin(Request $request)
    {
        $user = DB::table('admins')->where('username', $request->username)->first();
        $username = $request->post('username');
        $password = Hash::check($request->password, $user->password);
        $adminsession = DB::table('admins')->where('username', $username)->where('password', $password)->first();
        if ($adminsession) {
          Session::put('adminsession',$adminsession);
          return view('admin.index');            
        }
        else
        {
          return view('admin.login');
        }
    }

    public function adminLogout(Request $request)
    {
        $request->session()->forget('adminsession');
        return redirect('/');   
    }

    public function dashboard() {
      $admin = Admin::first();
      return view('admin.index',compact('admin'));  
    }
}
