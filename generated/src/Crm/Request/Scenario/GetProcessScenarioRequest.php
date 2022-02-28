<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Scenario;

class GetProcessScenarioRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var int
     */
    public $process = null;

    public function __construct()
    {
        $this->_request_url = '/process/scenario';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->process = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->process instanceof \Perfumer\Microservices\Undefined) {
            $array['process'] = $this->process;
        }

        return $array;
    }
}
