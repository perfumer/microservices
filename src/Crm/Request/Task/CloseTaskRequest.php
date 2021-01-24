<?php

namespace Perfumer\Microservices\Crm\Request\Task;

use Perfumer\Microservices\Request;

class CloseTaskRequest extends Request
{
    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $status = null;

    public function __construct()
    {
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
    }
}
