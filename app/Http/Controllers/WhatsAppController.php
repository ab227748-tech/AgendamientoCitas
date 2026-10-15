<?php

namespace App\Http\Controllers;

use App\Services\TwilioService;
use Exception;
use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    public function __construct(
        protected TwilioService $twilio
    ) {}

    public function send(Request $request)
    {
        $validated = $request->validate([
            'phone' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);

        try {
            $response = $this->twilio->sendWhatsAppMessage(
                $validated['phone'],
                $validated['message']
            );

            return response()->json([
                'success' => true,
                'sid' => $response->sid,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
