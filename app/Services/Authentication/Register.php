<?php

namespace App\Services\Authentication;

use App\Models\User;
use App\Services\BaseService;
use App\Services\ServiceInterface;

class Register extends BaseService implements ServiceInterface
{
    public function process($dto)
    {
        $create_user = User::create([
            'username' => $dto['username'],
            'email' => $dto['email'],
            'password' => $dto['password'],
            'terms' => $dto['terms'],
        ]);

        $this->result['success'] = true;
        $this->result['message'] = 'User Successfully Created';
        $this->result['data'] = $create_user;
    }
}
