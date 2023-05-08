<?php

namespace App\Providers;

use App\Services\Authentication\Login;

class RegisterApplication
{
    public function register()
    {
        return [
            [
                'service_name' => 'authenticate',
                'service_class' => Login::class
            ],
            // Add Here For New Service Class
        ];
    }
}
