<?php

namespace Generated\Perfumer\Microservices\Events\Request\Event;

class GetEventRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/event';
        $this->_request_method = 'get';
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
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
