<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Braintree\Gateway;
use Illuminate\Http\Request;
use Braintree\Transaction;
use \Braintree\Test\Nonces;

class PaymentController extends Controller
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new Gateway([
            'environment' => config('braintree.environment'),
            'merchantId' => config('braintree.merchantId'),
            'publicKey' => config('braintree.publicKey'),
            'privateKey' => config('braintree.privateKey')
        ]);
    }

    public function token()
    {
        //generate client token from braintree gateway
        $clientToken = $this->gateway->clientToken()->generate();
        return response()->json(['token' => $clientToken]);
    }


    public function processPayment(Request $request)
    {
        //validate form data
        $validData = $request->validate([
            'total_price' => 'numeric|min:0.01',
            'customer_name' => 'string|max:255',
            'customer_last_name' => 'string|max:255',
            'customer_address' => 'string|max:255',
            'customer_email' => 'email|max:255',
            'customer_phone' => 'string|max:20',
            'paymentMethodNonce' => 'string',
        ]);

        //set amount and nonce from form user data
        $amount = $validData['total_price'];
        $nonce = $validData['paymentMethodNonce'];

        //process payment with braintree gateway
        $result = $this->gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);
        //return response from api
        //if success, create a new order from validation form above
        if ($result->success) {

            //save order in db
            $order = new Order();
            $order->fill($validData);
            $order->save();

            //
            $orderInfo = json_decode($request->input('userData'), true);
            foreach ($orderInfo as $dish) {
                $order->dishes()->attach($dish['dish_id'], ['quantity' => $dish['quantity']]);
            }


            // Transazione riuscita!
            return response()->json([
                'message' => 'Payment successful',
                'transaction' => $result->transaction
            ]);
        } else {
            return response()->json([
                'success' => false, 'error' => $result->message
            ]);
        }
    }
}
