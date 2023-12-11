<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\Admin;

// use App\Models\Admin;
use Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Downloadable;


class AdminController extends Controller
{
    //

    public function Index(){
        return view ('admin.admin_login');
    } // end method


    public function Dashboard(){
        $users = User::all();
        $downloads = Downloadable::get();
        return view ('admin.index', compact('users', 'downloads'));
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
        $downloads = Downloadable::get();

        return view('admin.download',compact('downloads'));
    } // end method


    public function AllMembers(){

        $users = User::all();
        return view('admin.view_all_members', compact('users'));
    } // end method

    public function ViewAdmin(){

        $users = User::all();
        return view('admin.view_admin', compact('users'));
    } // end method

    public function UpdateSubscription(){
        return view('admin.update_subscription_package');
    } // end method


    public function Faq(){
        return view ('admin.faq');
    } // end method


    public function Contact(){
        return view ('admin.contact');
    } // end method




     /**
     * Destroy an user login session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/index');
    }


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



    // public function AdminLogout(){
    //     Auth::guard('admin')->logout();
    //     return redirect()->route('index')->with('error', 'Admin Logout Successfully');

    // } // end method


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
