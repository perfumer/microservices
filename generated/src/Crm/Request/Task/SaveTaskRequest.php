<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Task;

class SaveTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user = null;

    /**
     * @var string
     */
    public $customer = null;

    /**
     * @var string
     */
    public $activity = null;

    /**
     * @var string
     */
    public $ticket = null;

    /**
     * @var string
     */
    public $group = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $deadline_at = null;

    /**
     * @var string
     */
    public $wake_at = null;

    /**
     * @var string
     */
    public $process_scenario = null;

    /**
     * @var int
     */
    public $pipeline_branch = null;

    /**
     * @var string
     */
    public $complexity = null;

    /**
     * @var string
     */
    public $state = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $link = null;

    /**
     * @var array
     */
    public $payload = [
    ];

    public function __construct()
    {
        $this->_request_url = '/task';
        $this->_request_method = 'post';
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->customer = new \Perfumer\Microservices\Undefined();
        $this->activity = new \Perfumer\Microservices\Undefined();
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->deadline_at = new \Perfumer\Microservices\Undefined();
        $this->wake_at = new \Perfumer\Microservices\Undefined();
        $this->process_scenario = new \Perfumer\Microservices\Undefined();
        $this->pipeline_branch = new \Perfumer\Microservices\Undefined();
        $this->complexity = new \Perfumer\Microservices\Undefined();
        $this->state = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->link = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->customer instanceof \Perfumer\Microservices\Undefined) {
            $array['customer'] = $this->customer;
        }
        if (!$this->activity instanceof \Perfumer\Microservices\Undefined) {
            $array['activity'] = $this->activity;
        }
        if (!$this->ticket instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket'] = $this->ticket;
        }
        if (!$this->group instanceof \Perfumer\Microservices\Undefined) {
            $array['group'] = $this->group;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->deadline_at instanceof \Perfumer\Microservices\Undefined) {
            $array['deadline_at'] = $this->deadline_at;
        }
        if (!$this->wake_at instanceof \Perfumer\Microservices\Undefined) {
            $array['wake_at'] = $this->wake_at;
        }
        if (!$this->process_scenario instanceof \Perfumer\Microservices\Undefined) {
            $array['process_scenario'] = $this->process_scenario;
        }
        if (!$this->pipeline_branch instanceof \Perfumer\Microservices\Undefined) {
            $array['pipeline_branch'] = $this->pipeline_branch;
        }
        if (!$this->complexity instanceof \Perfumer\Microservices\Undefined) {
            $array['complexity'] = $this->complexity;
        }
        if (!$this->state instanceof \Perfumer\Microservices\Undefined) {
            $array['state'] = $this->state;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->link instanceof \Perfumer\Microservices\Undefined) {
            $array['link'] = $this->link;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }

        return $array;
    }
}
