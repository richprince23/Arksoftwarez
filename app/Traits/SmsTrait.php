<?php

namespace App\Traits;

class SmsTrait
{
    /**
     * Sends an sms to a phone number. The number can be international or local
     *
     * @param string $mobile Receipient phone number
     * @param string $message  The message to be sent
     * @return void
     */
    public function sendSms($mobile, $message)
    {
        $secret = env('HUBTEL_SMS_SECRET');
        $clientId = env('HUBTEL_SMS_CLIENTID');
        $curl = curl_init();

        $payload = array(
            "from" => "ARKSOFT",
            "to" => "233" . substr($mobile, -9),
            "content" => $message,
        );

        curl_setopt_array($curl, [
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "Authorization: Basic " . base64_encode($clientId.":".$secret)
            ],
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_URL => "https://devp-sms03726-api.hubtel.com/v1/messages/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        if ($error) {
            echo "cURL Error #:" . $error;
        } else {
            echo $response;
        }

        // dd($response);
    }
}
