<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Activity;

class UpdateActivityRequest extends \Perfumer\Microservices\Request
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
    public $code = null;

    /**
     * @var int
     */
    public $priority = null;

    /**
     * @var bool
     */
    public $is_forced = null;

    /**
     * @var bool
     */
    public $is_applicant = null;

    public function __construct()
    {
        $this->_request_url = '/activity';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->customer_name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->priority = new \Perfumer\Microservices\Undefined();
        $this->is_forced = new \Perfumer\Microservices\Undefined();
        $this->is_applicant = new \Perfumer\Microservices\Undefined();
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
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->priority instanceof \Perfumer\Microservices\Undefined) {
            $array['priority'] = $this->priority;
        }
        if (!$this->is_forced instanceof \Perfumer\Microservices\Undefined) {
            $array['is_forced'] = $this->is_forced;
        }
        if (!$this->is_applicant instanceof \Perfumer\Microservices\Undefined) {
            $array['is_applicant'] = $this->is_applicant;
        }

        return $array;
    }
}
