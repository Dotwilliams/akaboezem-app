<?php

namespace App\Http\Controllers;
use App\Models\Downloadable;
use Illuminate\Http\Request;

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
        return view('member.notification');
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
