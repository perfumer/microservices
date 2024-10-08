<?php

namespace Generated\Perfumer\Microservices\Events\Request\Module;

class UpdateModuleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $customer_name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $customers_ticket_crm_module;

    /**
     * @var string
     */
    public $user_ticket_crm_module;

    /**
     * @var string
     */
    public $tickets_mode;

    /**
     * @var string
     */
    public $allowed_crm_modules;

    /**
     * @var string
     */
    public $allowed_crm_module_mode;

    /**
     * @var string
     */
    public $allowed_crm_ticket_from;

    /**
     * @var bool
     */
    public $is_archived;

    /**
     * @var int
     */
    public $weekly_schedule_limit;

    /**
     * @var bool
     */
    public $is_scheduled;

    /**
     * @var string
     */
    public $tags;

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
        $this->_request_url = '/module';
        $this->_request_method = 'patch';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->customer_name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->customers_ticket_crm_module = new \Perfumer\Microservices\Undefined();
        $this->user_ticket_crm_module = new \Perfumer\Microservices\Undefined();
        $this->tickets_mode = new \Perfumer\Microservices\Undefined();
        $this->allowed_crm_modules = new \Perfumer\Microservices\Undefined();
        $this->allowed_crm_module_mode = new \Perfumer\Microservices\Undefined();
        $this->allowed_crm_ticket_from = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->weekly_schedule_limit = new \Perfumer\Microservices\Undefined();
        $this->is_scheduled = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->customer_name instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_name'] = $this->customer_name;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->customers_ticket_crm_module instanceof \Perfumer\Microservices\Undefined) {
            $array['customers_ticket_crm_module'] = $this->customers_ticket_crm_module;
        }
        if (!$this->user_ticket_crm_module instanceof \Perfumer\Microservices\Undefined) {
            $array['user_ticket_crm_module'] = $this->user_ticket_crm_module;
        }
        if (!$this->tickets_mode instanceof \Perfumer\Microservices\Undefined) {
            $array['tickets_mode'] = $this->tickets_mode;
        }
        if (!$this->allowed_crm_modules instanceof \Perfumer\Microservices\Undefined) {
            $array['allowed_crm_modules'] = $this->allowed_crm_modules;
        }
        if (!$this->allowed_crm_module_mode instanceof \Perfumer\Microservices\Undefined) {
            $array['allowed_crm_module_mode'] = $this->allowed_crm_module_mode;
        }
        if (!$this->allowed_crm_ticket_from instanceof \Perfumer\Microservices\Undefined) {
            $array['allowed_crm_ticket_from'] = $this->allowed_crm_ticket_from;
        }
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }
        if (!$this->weekly_schedule_limit instanceof \Perfumer\Microservices\Undefined) {
            $array['weekly_schedule_limit'] = $this->weekly_schedule_limit;
        }
        if (!$this->is_scheduled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_scheduled'] = $this->is_scheduled;
        }
        if (!$this->tags instanceof \Perfumer\Microservices\Undefined) {
            $array['tags'] = $this->tags;
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
