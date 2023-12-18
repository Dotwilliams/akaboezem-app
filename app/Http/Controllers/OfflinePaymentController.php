<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\OfflinePayment;
use App\Models\MemberSubscription;
use App\Notifications\MebmerSubscribedNotification;

class OfflinePaymentController extends Controller
{
    public function uploadProve(Request $request){
        $request->validate([

            'payment_prove' => 'required|mimes:jpeg,png,jpg|max:50000',
        ]);

        $offlinepayment = $request->file('payment_prove');

        $path = $offlinepayment->store('offlinepayments', 'public');

        $offlinepayment = OfflinePayment::create([

            'user_id' =>$request->user_id,
            'prove_of_payment' =>$path,

        ]);
        return back()->with('message', 'Awaiting Payment Approval!' );
    }

    public function get(){
        $payment = offlinepayment::get();

    }


    public function verifyPayment(Request $request){
        $offlinepayment = OfflinePayment::find($request->id);

        $user = User::find($offlinepayment->user_id);

        // return $user;

        if ($request->verdict == 'approve') {
           User::find($offlinepayment->user_id)->update([
            'subscription_status' => true
           ]);

           $recorded = MemberSubscription::create([
            'user_id' => $user->id,

            'exp_date' => $user->updated_at->addDays(365),
           ]);
           $offlinepayment->update(['status'=> 'approved']);

           $user->notify(new MebmerSubscribedNotification($recorded));
           return back()->with('message', 'Payment Approve');
        }

        if ($request->verdict == 'disapprove') {

        }
    }
}
