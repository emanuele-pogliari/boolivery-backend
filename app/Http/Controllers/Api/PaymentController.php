<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $clientToken = $this->gateway->clientToken()->generate();
        return response()->json(['token' => $clientToken]);
    }

    public function processPayment(Request $request)
    {
        $nonce = $request->input('paymentMethodNonce');
        // $nonce = 'fake-processor-declined-visa-nonce';
        // $amount = $request->input('amount');

        $amount = 30;
        $result = $this->gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
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
