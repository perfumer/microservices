<?php

namespace Generated\Perfumer\Microservices\Crm\Request\State;

class DeleteProcessStateRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $process = null;

    public function __construct()
    {
        $this->_request_url = '/process/state';
        $this->_request_method = 'delete';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->process = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->process instanceof \Perfumer\Microservices\Undefined) {
            $array['process'] = $this->process;
        }

        return $array;
    }
}
