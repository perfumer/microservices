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

    public function __construct()
    {
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->from_state = new \Perfumer\Microservices\Undefined();
        $this->to_state = new \Perfumer\Microservices\Undefined();
    }
}
