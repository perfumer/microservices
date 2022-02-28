<?php

namespace Generated\Perfumer\Microservices\Crm\Request\State;

class SaveProcessStateRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $process = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var int
     */
    public $task_page_id = null;

    /**
     * @var string
     */
    public $task_page_code = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $customer_name = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var bool
     */
    public $is_final = null;

    /**
     * @var bool
     */
    public $is_success = null;

    /**
     * @var string
     */
    public $log_text = null;

    /**
     * @var int
     */
    public $priority = null;

    public function __construct()
    {
        $this->_request_url = '/process/state';
        $this->_request_method = 'post';
        $this->process = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->task_page_id = new \Perfumer\Microservices\Undefined();
        $this->task_page_code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->customer_name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->is_final = new \Perfumer\Microservices\Undefined();
        $this->is_success = new \Perfumer\Microservices\Undefined();
        $this->log_text = new \Perfumer\Microservices\Undefined();
        $this->priority = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->process instanceof \Perfumer\Microservices\Undefined) {
            $array['process'] = $this->process;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->task_page_id instanceof \Perfumer\Microservices\Undefined) {
            $array['task_page_id'] = $this->task_page_id;
        }
        if (!$this->task_page_code instanceof \Perfumer\Microservices\Undefined) {
            $array['task_page_code'] = $this->task_page_code;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->customer_name instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_name'] = $this->customer_name;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->is_final instanceof \Perfumer\Microservices\Undefined) {
            $array['is_final'] = $this->is_final;
        }
        if (!$this->is_success instanceof \Perfumer\Microservices\Undefined) {
            $array['is_success'] = $this->is_success;
        }
        if (!$this->log_text instanceof \Perfumer\Microservices\Undefined) {
            $array['log_text'] = $this->log_text;
        }
        if (!$this->priority instanceof \Perfumer\Microservices\Undefined) {
            $array['priority'] = $this->priority;
        }

        return $array;
    }
}
