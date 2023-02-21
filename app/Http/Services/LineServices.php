<?php

namespace App\Http\Services;


use GuzzleHttp\Client;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class LineServices
{

    public function getLoginBaseUrl()
    {
        try {
            $currentTime = Carbon::now()->getTimestamp();
            $url = config('line.line_authorize_uri') . '?';
            $url .= 'response_type=code';
            $url .= '&client_id=' . \config('line.LINE_LOGIN_CHANNEL_ID');
            $url .= '&redirect_uri=' . route('admin.login.line.callback');
            $url .= '&state=' . $currentTime;
            $url .= '&disable_auto_login=true';
            $url .= '&nonce=09876xyz';
            $url .= '&scope=profile%20openid%20email';

            return $url;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getLineToken($code)
    {
        try {
            $client = new Client();
            $response = $client->post(config("line.line_token_uri"), [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded'
                ],
                'form_params' => [
                    'grant_type' => 'authorization_code',
                    'code' => $code,
                    'redirect_uri' => route('admin.login.line.callback'),
                    'client_id' => config('line.LINE_LOGIN_CHANNEL_ID'),
                    'client_secret' => config('line.LINE_LOGIN_CHANNEL_SECRET')
                ]
            ]);
            Log::info(["getLineToken", $response->getBody()->getContents()]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getUserProfile($token)
    {
        try {
            $client = new Client();
            $headers = [
                'Authorization' => 'Bearer ' . $token,
                'Accept'        => 'application/json',
            ];
            $response = $client->get( config('line.line_profile_uri'), [
                'headers' => $headers
            ]);
            Log::info(["getUserProfile", $response->getBody()->getContents()]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function verifyIDToken($idToken)
    {
        try {
            $client = new Client();
            $response = $client->post(config("line.line_verify_uri"), [
                'form_params' => [
                    'id_token' => $idToken,
                    'client_id' => config('line.LINE_LOGIN_CHANNEL_ID'),
                ]
            ]);
            Log::info(["verifyIDToken", $response->getBody()->getContents()]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}