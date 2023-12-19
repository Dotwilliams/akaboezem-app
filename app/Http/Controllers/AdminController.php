<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\Admin;

// use App\Models\Admin;
use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use App\Models\Downloadable;
use Illuminate\Http\Request;
use App\Models\OfflinePayment;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    //

    public function Index(){
        return view ('admin.admin_login');
    } // end method


    public function Dashboard(){
        $users = User::all();
        // $downloads = Downloadable::all();
        $downloads = Downloadable::get();
        return view ('admin.index', compact('users', 'downloads'));
    } // end method


    public function Profile(){
        $user = User::find(Auth::user()->id)->first();
        return view ('admin.profile', compact('user'));
    } // end method


    public function Notification(){
        return view ('admin.notification');
    } // end method

    public function Message(){
        return view ('admin.message');
    } // end method

    public function Download(){
        $downloads = Downloadable::get();
        // $trashDownload = Downloadable::onlyTrashed()->latest()->paginate(3);
        return view('admin.download',compact('downloads'));
    } // end method


    public function AllMembers(){

        $users = User::all();
        return view('admin.view_all_members', compact('users'));
    } // end method

    public function ViewAdmin(){

        $users = User::get();
        return view('admin.view_admin', compact('users'));
    } // end method

    public function UpdateSubscription(){
        return view('admin.update_subscription_package');
    } // end method



    public function StoreAdmin(Request $request){
        $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',

        ],
        [
            'name.required' => 'Pls Input Admin Name',
            'email.required' => 'Pls Input Admin Email',
        ]
    );
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
        ]);
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

        return redirect('/');
    }

    public function create_sub_admin(Request $request){
        $sub_admin = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'sub_admin',
            'otp'=>rand(111, 999),
            'usercode'=>'Admin'.rand(111, 999),
            'subscription_status'=>true,
            'email_verified_at'=> Carbon::now(),
            'password'=>Hash::make($request->password),
        ]);
        return back();
    }


    public function offlinePayment(Request $request){

        $payments = OfflinePayment::with('user')->get();
        return view('admin.offline_payment', compact('payments'));
    }
}
