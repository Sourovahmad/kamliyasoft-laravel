<?php

namespace App\Validators;
use GuzzleHttp\Client;

class Recaptcha{
    public function validate($attribute, $value, $parameters, $validator)
    {
        $client = new Client;
        $response = $client->post(
            'https://www.google.com/recaptcha/api/sitevarify',
            [
                'form_params' => [
                    'secret' => config('services.recaptcha.secret'),
                    'response' => $value
                ]
            ]
            );

            $body = json_decode((string)$response->getBody());
            return $body->success;
    }
}