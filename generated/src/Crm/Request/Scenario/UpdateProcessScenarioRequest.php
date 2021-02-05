<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Scenario;

class UpdateProcessScenarioRequest extends \Perfumer\Microservices\Request
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
     * @var string
     */
    public $from_state = null;

    /**
     * @var string
     */
    public $to_state = null;

    /**
     * @var string
     */
    public $webhook = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->from_state = new \Perfumer\Microservices\Undefined();
        $this->to_state = new \Perfumer\Microservices\Undefined();
        $this->webhook = new \Perfumer\Microservices\Undefined();
    }
}
