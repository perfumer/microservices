<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Module;

class UpsertModuleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

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
    public $code = null;

    /**
     * @var bool
     */
    public $is_archived = null;

    /**
     * @var bool
     */
    public $is_protected = null;

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

    /**
     * @var int
     */
    public $business_case = null;

    /**
     * @var array
     */
    public $payload = [
    ];

    /**
     * @var array
     */
    public $fields = [
    ];

    /**
     * @var int
     */
    public $fields_page_id = null;

    /**
     * @var string
     */
    public $back_service_page = null;

    public function __construct()
    {
        $this->_request_url = '/module';
        $this->_request_method = 'put';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->customer_name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
        $this->parents = new \Perfumer\Microservices\Undefined();
        $this->children = new \Perfumer\Microservices\Undefined();
        $this->business_case = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->fields = new \Perfumer\Microservices\Undefined();
        $this->fields_page_id = new \Perfumer\Microservices\Undefined();
        $this->back_service_page = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
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
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }
        if (!$this->is_protected instanceof \Perfumer\Microservices\Undefined) {
            $array['is_protected'] = $this->is_protected;
        }
        if (!$this->parents instanceof \Perfumer\Microservices\Undefined) {
            $array['parents'] = $this->parents;
        }
        if (!$this->children instanceof \Perfumer\Microservices\Undefined) {
            $array['children'] = $this->children;
        }
        if (!$this->business_case instanceof \Perfumer\Microservices\Undefined) {
            $array['business_case'] = $this->business_case;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }
        if (!$this->fields instanceof \Perfumer\Microservices\Undefined) {
            $array['fields'] = $this->fields;
        }
        if (!$this->fields_page_id instanceof \Perfumer\Microservices\Undefined) {
            $array['fields_page_id'] = $this->fields_page_id;
        }
        if (!$this->back_service_page instanceof \Perfumer\Microservices\Undefined) {
            $array['back_service_page'] = $this->back_service_page;
        }

        return $array;
    }
}
