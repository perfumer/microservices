<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Scenario;

class SaveProcessScenarioRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $from_state = null;

    /**
     * @var string
     */
    public $to_state = null;

    /**
     * @var array
     */
    public $triggered_processes = [
    ];

    /**
     * @var string
     */
    public $webhook = null;

    public function __construct()
    {
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->from_state = new \Perfumer\Microservices\Undefined();
        $this->to_state = new \Perfumer\Microservices\Undefined();
        $this->triggered_processes = new \Perfumer\Microservices\Undefined();
        $this->webhook = new \Perfumer\Microservices\Undefined();
    }
}
