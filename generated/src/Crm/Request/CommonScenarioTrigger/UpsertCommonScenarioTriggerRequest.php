<?php

namespace Generated\Perfumer\Microservices\Crm\Request\CommonScenarioTrigger;

class UpsertCommonScenarioTriggerRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $common_trigger = null;

    /**
     * @var string
     */
    public $process_scenario = null;

    /**
     * @var array
     */
    public $arguments = [
    ];

    public function __construct()
    {
        $this->_request_url = '/common-scenario-trigger';
        $this->_request_method = 'put';
        $this->common_trigger = new \Perfumer\Microservices\Undefined();
        $this->process_scenario = new \Perfumer\Microservices\Undefined();
        $this->arguments = new \Perfumer\Microservices\Undefined();
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

        return $array;
    }
}
