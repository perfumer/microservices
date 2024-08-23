<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Condition;

class SaveTriggerConditionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $trigger;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $process;

    /**
     * @var int
     */
    public $state;

    /**
     * @var int
     */
    public $scenario;

    public function __construct()
    {
        $this->_request_url = '/trigger/condition';
        $this->_request_method = 'post';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->trigger = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->process = new \Perfumer\Microservices\Undefined();
        $this->state = new \Perfumer\Microservices\Undefined();
        $this->scenario = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->trigger instanceof \Perfumer\Microservices\Undefined) {
            $array['trigger'] = $this->trigger;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->process instanceof \Perfumer\Microservices\Undefined) {
            $array['process'] = $this->process;
        }
        if (!$this->state instanceof \Perfumer\Microservices\Undefined) {
            $array['state'] = $this->state;
        }
        if (!$this->scenario instanceof \Perfumer\Microservices\Undefined) {
            $array['scenario'] = $this->scenario;
        }

        return $array;
    }
}
