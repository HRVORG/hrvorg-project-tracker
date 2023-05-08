<?php

namespace App\Services;

interface ServiceInterface
{
    public function execute( $request );

    public function executeWithFormatter( $request );
}
