<?php

namespace App\Http\Controllers;

use Paystack;

use App\Models\User;
use App\Http\Requests;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\MebmerDonationNotification;

class DonationController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            // return $e ;
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);
        // return $paymentDetails['data']['status'];
        if ($paymentDetails['data']['status']=='success') {
           $user_email = $paymentDetails['data']['customer']['email'];
           $user = User::where('email', $user_email)->first();

           $donation = Donation::create([
               'user_id' => $user->id,
               'amount' => $paymentDetails['data']['amount']
           ]);
           $user->notify(new MebmerDonationNotification($donation));
           return redirect('/member/donation');
        //    return redirect('/member/resources');
        } else {
            redirect('member.resources');
        }


        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
