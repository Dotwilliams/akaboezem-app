<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OfflinePayment;

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
}
