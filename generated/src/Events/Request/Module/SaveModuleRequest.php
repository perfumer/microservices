<?php

namespace Generated\Perfumer\Microservices\Events\Request\Module;

class SaveModuleRequest extends \Perfumer\Microservices\Request
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
    public $ticket_crm_module = null;

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
     * @var array
     */
    public $parents = [
    ];

    /**
     * @var array
     */
    public $children = [
    ];

    public function __construct()
    {
        $this->_request_url = '/module';
        $this->_request_method = 'post';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->customer_name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->ticket_crm_module = new \Perfumer\Microservices\Undefined();
        $this->allowed_crm_modules = new \Perfumer\Microservices\Undefined();
        $this->allowed_crm_module_mode = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->parents = new \Perfumer\Microservices\Undefined();
        $this->children = new \Perfumer\Microservices\Undefined();
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
        if (!$this->ticket_crm_module instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_crm_module'] = $this->ticket_crm_module;
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
        if (!$this->parents instanceof \Perfumer\Microservices\Undefined) {
            $array['parents'] = $this->parents;
        }
        if (!$this->children instanceof \Perfumer\Microservices\Undefined) {
            $array['children'] = $this->children;
        }

        return $array;
    }
}
