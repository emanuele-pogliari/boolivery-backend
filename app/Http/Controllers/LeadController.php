<?php

namespace App\Http\Controllers;

use App\Mail\NewOrderNotificationMail;
use App\Mail\OrderConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $new_lead = new LeadController();
        $new_lead->fill($data);
        $new_lead->save();

        Mail::to('')->send(new OrderConfirmationMail($new_lead));
        Mail::to('')->send(new NewOrderNotificationMail($new_lead));

        return response()->json([
            'success' => true
        ]);
    }
}
