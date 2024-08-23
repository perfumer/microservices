<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Activity;

class SaveActivityRequest extends \Perfumer\Microservices\Request
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
    public $code;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var bool
     */
    public $is_forced;

    /**
     * @var bool
     */
    public $is_applicant;

    public function __construct()
    {
        $this->_request_url = '/activity';
        $this->_request_method = 'post';
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
