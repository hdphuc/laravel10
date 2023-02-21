<?php

namespace App\Services;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Support\Carbon;

class UserService
{
    /** @var User */
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    } 

    public function create($data)
    {
        try {
            $this->model->create($this->convertData($data));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    protected function convertData($data)
    {
        $result = [];
        foreach ($data as $key => $item) {
            switch ($key) {
                case 'access_token':
                    $result['access_token'] = $item;
                    break;
                case 'id_token':
                    $result['id_token'] = $item;
                    break;
                case 'userId':
                    $result['user_id'] = $item;
                    break;
                case 'displayName':
                    $result['display_name'] = $item;
                    break;
                case 'statusMessage':
                    $result['status_message'] = $item;
                    break;
                case 'pictureUrl':
                    $result['picture_url'] = $item;
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        $result['verified_at'] = Carbon::now();
        return $result;
    }
}