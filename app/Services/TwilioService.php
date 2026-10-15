<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    protected Client $client;

    protected string $from;

    public function __construct()
    {
        $this->client = new Client(
            config('services.twilio.sid'),
            config('services.twilio.token')
        );
        $this->from = config('services.twilio.whatsapp_from');
    }

    public function sendWhatsAppMessage(string $to, string $message)
    {
        if (! str_starts_with($to, '+')) {
            $to = '+'.$to;
        }

        return $this->client->messages->create(
            "whatsapp:{$to}",
            [
                'from' => $this->from,
                'body' => $message,
            ]
        );
    }
}
