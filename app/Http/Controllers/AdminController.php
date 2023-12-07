<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\Admin;

// use App\Models\Admin;
use Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //

    public function Index(){
        return view ('admin.admin_login');
    } // end method


    public function Dashboard(){
        return view ('admin.index');
    } // end method


    public function Profile(){
        return view ('admin.profile');
    } // end method


    public function Notification(){
        return view ('admin.notification');
    } // end method

    public function Message(){
        return view ('admin.message');
    } // end method

    public function Download(){
        return view ('admin.download');
    } // end method
    

    public function Faq(){
        return view ('admin.faq');
    } // end method
    

    public function Contact(){
        return view ('admin.contact');
    } // end method





    // public function Login(Request $request){
    //    dd($request->all());

        // $check = $request->all();
        // if(Auth::guard('admin')->attempt(['Email' => $check['email'],
        //  'password' => $check['password'] ])){
        //     return redirect()->route('admin.dashboard')->with('error', 'Admin Login Successfully');
        //  }else{
        //     return back()->with('error', 'Invalid Email Or Password');
        //  }

    // } // end method


    
    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('index')->with('error', 'Admin Logout Successfully');

    } // end method


    // public function AdminRegister(){
    //     return view ('admin.admin_register');
    // } // end method


    // public function AdminRegisterCreate(Request $request){
    //    Admin::insert([
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'password' => Hash::make($request->password),
    //     'created_at' => Carbon::now(),

    //    ]);
    //    return redirect()->route('login_form')->with('error', 'Admin Created Successfully');

    // } // end method
}
