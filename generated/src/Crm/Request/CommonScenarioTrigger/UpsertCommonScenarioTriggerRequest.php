<?php

namespace Generated\Perfumer\Microservices\Crm\Request\CommonScenarioTrigger;

class UpsertCommonScenarioTriggerRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $common_trigger;

    /**
     * @var string
     */
    public $process_scenario;

    /**
     * @var array
     */
    public $arguments = [
    ];

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/common-scenario-trigger';
        $this->_request_method = 'put';
        $this->common_trigger = new \Perfumer\Microservices\Undefined();
        $this->process_scenario = new \Perfumer\Microservices\Undefined();
        $this->arguments = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->common_trigger instanceof \Perfumer\Microservices\Undefined) {
            $array['common_trigger'] = $this->common_trigger;
        }
        if (!$this->process_scenario instanceof \Perfumer\Microservices\Undefined) {
            $array['process_scenario'] = $this->process_scenario;
        }
        if (!$this->arguments instanceof \Perfumer\Microservices\Undefined) {
            $array['arguments'] = $this->arguments;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
