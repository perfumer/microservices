<?php

namespace Generated\Perfumer\Microservices\Crm\Request\CommonScenarioTriggers;

class UpsertCommonScenarioTriggersRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var array
     */
    public $process_scenarios = [
    ];

    public function __construct()
    {
        $this->_request_url = '/common-scenario-triggers';
        $this->_request_method = 'put';
        $this->process_scenarios = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->process_scenarios instanceof \Perfumer\Microservices\Undefined) {
            $array['process_scenarios'] = $this->process_scenarios;
        }

        return $array;
    }
}
