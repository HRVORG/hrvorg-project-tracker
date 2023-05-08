<?php

namespace App\Services\Authentication;

use App\Services\BaseService;
use App\Services\ServiceInterface;
use Illuminate\Support\Facades\Auth;

class Login extends BaseService implements ServiceInterface
{
    public function process($dto)
    {
        $this->result['success'] = false;

        if (Auth::attempt(['email' => $dto['email'], 'password' => $dto['password']])) {
            $this->result['success'] = true;
            $this->result['message'] = 'Berhasil Login';
            $this->result['data'] = [
                'email' => $dto['email']
            ];
        } else {
            $this->result['success'] = false;
            $this->result['message'] = 'Terjadi Kesalahan Otentikasi';
            $this->result['data'] = [];
        }
    }
}
