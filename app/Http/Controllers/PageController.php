<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;

class PageController extends Controller
{
    public function oneTimeDonatePage(){
        return view('onetimepay');
    }

    public  function oneTimeProcessPay(Request $request){
        $amount= $request->input('amount');
        $email = $request->input('email');
        $amount = $amount * 100; //change to kobo
        $user_id = Auth::user()->id;
        //dd($amount.$email.$user_id);
        $metastring = '{"custom_fields":[{"user_id":'. $user_id. '},{"action": "onetime"}]}';


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'amount'=>$amount,
                'email'=>$email,
                'metadata' =>$metastring,
            ]),
            CURLOPT_HTTPHEADER => [
                "authorization: Bearer sk_test_eb4a4617e53759117b4eb5458701f3667efbc860", //replace this with your own test key
                "content-type: application/json",
                "cache-control: no-cache"
            ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if($err){
            // there was an error contacting the Paystack API
            die('Curl returned error: ' . $err);
        }

        $tranx = json_decode($response);
        //dd($tranx);

        if(!$tranx->status){
            // there was an error from the API
            print_r('API returned error: ' . $tranx['message']);
        }

// comment out this line if you want to redirect the user to the payment page
        print_r($tranx);


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
//header('Location: ' . $tranx->data->authorization_url);
        return redirect($tranx->data->authorization_url);
    }


    public function donationcompleted()
    {
           // dd("Hello Mike");

        $paystackkeys = 'sk_test_eb4a4617e53759117b4eb5458701f3667efbc860';

        $curl_auth = 'Authorization: Bearer '.$paystackkeys;
        $curl = curl_init();
        $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
        if(!$reference){
            Session::flash('error', 'No payment reference supplied');
            return redirect()->route('savingsplan');
            //die('No reference supplied');
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                $curl_auth,
                "cache-control: no-cache"
            ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if($err){
            // there was an error contacting the Paystack API
            //Session::flash('error', 'Curl returned error: ' . $err);
            Session::flash('error', 'Payment gateway system returned an error');
            //die('Curl returned error: ' . $err);
        }

        $tranx = json_decode($response);

        if(!$tranx->status){
            // there was an error from the API
            dd('API returned error: ' . $tranx->message);
        }

        if('success' == $tranx->data->status){

            $auth_code = $tranx->data->authorization->authorization_code;
            $amount= ($tranx->data->amount) / 100;
            $last_transaction = $tranx->data->transaction_date;
            $metadata = $tranx->data->metadata->custom_fields;
            $user_id = $metadata[0]->user_id;
            $action = $metadata[1]->action;
//            $savings_id = $metadata[2]->savings_id;
            $email = $tranx->data->customer->email;
            $payment_ref = $tranx->data->reference;

            //save every transaction record
            $record = new Transaction;
            $record->amount = $amount;
            $record->email = $email;
            $record->plan = $action;
            $record->user_id = $user_id;
            $record->payment_ref = $payment_ref;
            $record->save();
            //saving complete

            //update user table with authorization_code
            $user = User::find($user_id);
            $user->authorization_code = $auth_code;
            $user->save();
            //end of user table update
            //dd('hi Michael');

            return redirect()->route('home');
        }


        else
        {
            Session::flash('error', 'Operation cannot be Completed at The Moment!');

            return redirect()->route('homepage');
        }



    }

    public function paymentRecord(){
        $user_id = Auth::user()->id;
        $records = Transaction::where('user_id', $user_id)->get();
        return view('paymentrecord', compact('records'));
    }

    public function recurrentDonatePage()
    {
        return view('monthlypayment');
    }
}
