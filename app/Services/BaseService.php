<?php

namespace App\Services;

use App\Helpers\Response;
use App\Services\ServiceInterface;

abstract class BaseService implements ServiceInterface
{
    protected $result;

    public function __construct()
    {
        $this->result = ['success' => null, 'message' => null, 'data' => null];
    }

    abstract protected function process( $data );

    public function execute( $input )
    {
        $this->process($input);

        return $this->result;
    }

    public function executeWithFormatter($input)
    {
        $this->process($input);

        if (!$this->result['success']) {

            return Response::error($this->result['data'], $this->result['message']);

        } else {

            return Response::success($this->result['data'], $this->result['message']);

        }
    }
}
