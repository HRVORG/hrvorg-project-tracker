<?php

namespace App\Providers;

use App\Services\Authentication\Login;
use App\Services\Authentication\Register;

class RegisterApplication
{
    public function register()
    {
        return [
            [
                'service_name' => 'authenticate',
                'service_class' => Login::class
            ],
            [
                'service_name' => 'register',
                'service_class' => Register::class
            ],
            // Add Here For New Service Class
        ];
    }
}
