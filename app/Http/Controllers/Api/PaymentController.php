<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Http\Request;
use Braintree\Transaction;

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
        $clientToken = $this->gateway->clientToken()->generate();
        return response()->json(['token' => $clientToken]);
    }

    public function processPayment(Request $request)
    {
        $nonce = $request->input('payment_method_nonce');

        $transaction = new Transaction();
        $result = $transaction->sale([
            'amount' => $request->input('amount'),
            'paymentMethodNonce' => $nonce,
        ]);

        if ($result->success) {
            // Transazione riuscita!
            return response()->json(['success' => true]);
        } else {
            // Transazione fallita!
            return response()->json(['error' => $result->error->message]);
        }
    }
}
