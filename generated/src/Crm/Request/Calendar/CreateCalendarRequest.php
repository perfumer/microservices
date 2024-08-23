<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Calendar;

class CreateCalendarRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $code;

    /**
     * @var array
     */
    public $entries = [
    ];

    /**
     * @var bool
     */
    public $is_protected;

    /**
     * @var bool
     */
    public $silent;

    public function __construct()
    {
        $this->_request_url = '/calendar';
        $this->_request_method = 'post';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->entries = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
        $this->silent = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->entries instanceof \Perfumer\Microservices\Undefined) {
            $array['entries'] = $this->entries;
        }
        if (!$this->is_protected instanceof \Perfumer\Microservices\Undefined) {
            $array['is_protected'] = $this->is_protected;
        }
        if (!$this->silent instanceof \Perfumer\Microservices\Undefined) {
            $array['silent'] = $this->silent;
        }

        return $array;
    }
}
