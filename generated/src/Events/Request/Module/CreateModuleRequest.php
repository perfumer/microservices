<?php

namespace Generated\Perfumer\Microservices\Events\Request\Module;

class CreateModuleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

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
     * @var string
     */
    public $customers_ticket_crm_module = null;

    /**
     * @var string
     */
    public $user_ticket_crm_module = null;

    /**
     * @var string
     */
    public $tickets_mode = null;

    /**
     * @var string
     */
    public $allowed_crm_modules = null;

    /**
     * @var string
     */
    public $allowed_crm_module_mode = null;

    /**
     * @var bool
     */
    public $is_archived = null;

    /**
     * @var int
     */
    public $weekly_schedule_limit = null;

    /**
     * @var bool
     */
    public $is_scheduled = null;

    public function __construct()
    {
        $this->_request_url = '/module';
        $this->_request_method = 'post';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->customer_name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->customers_ticket_crm_module = new \Perfumer\Microservices\Undefined();
        $this->user_ticket_crm_module = new \Perfumer\Microservices\Undefined();
        $this->tickets_mode = new \Perfumer\Microservices\Undefined();
        $this->allowed_crm_modules = new \Perfumer\Microservices\Undefined();
        $this->allowed_crm_module_mode = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->weekly_schedule_limit = new \Perfumer\Microservices\Undefined();
        $this->is_scheduled = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
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
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }
        if (!$this->weekly_schedule_limit instanceof \Perfumer\Microservices\Undefined) {
            $array['weekly_schedule_limit'] = $this->weekly_schedule_limit;
        }
        if (!$this->is_scheduled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_scheduled'] = $this->is_scheduled;
        }

        return $array;
    }
}
