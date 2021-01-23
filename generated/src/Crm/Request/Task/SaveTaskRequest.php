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
    public $closed_at = null;

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
     * @var string
     */
    public $close_status = null;

    /**
     * @var array
     */
    public $payload = [
    ];

    public function __construct()
    {
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->activity = new \Perfumer\Microservices\Undefined();
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->deadline_at = new \Perfumer\Microservices\Undefined();
        $this->wake_at = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->complexity = new \Perfumer\Microservices\Undefined();
        $this->state = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->link = new \Perfumer\Microservices\Undefined();
        $this->close_status = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
    }
}