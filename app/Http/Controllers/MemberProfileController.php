<?php

namespace App\Http\Controllers;
use App\Models\Downloadable;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MemberProfileController extends Controller
{
    //
    // member dashboard

    public function Dashboard()  {
        return view('member.index_dashboard');
    }


    public function Resources()  {
        $resources = Downloadable::get();

        return view('member.resources', compact('resources'));
    }

    public function Donation()  {
        return view('member.donation');
    }


    public function Notification()  {
        $notifications = Notification::where('data->user_id', Auth::user()->id)->latest()->get();

        $user_notifications = [];

        foreach ($notifications as $notificaion)
        {
            # code...

            array_push($user_notifications, json_decode($notificaion->data));

        }
        // return $user_notifications ;

        return view('member.notification', compact('user_notifications'));
    }

    public function DownloadHistory()  {
        return view('member.download_history');
    }

    public function SubReminder()  {
        return view('member.sub_reminder');
    }


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
}
