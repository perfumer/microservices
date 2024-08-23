<?php

namespace Generated\Perfumer\Microservices\I18n\Request\Translation;

class GetTranslationRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $key;

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
        $this->_request_url = '/translation';
        $this->_request_method = 'get';
        $this->key = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->key instanceof \Perfumer\Microservices\Undefined) {
            $array['key'] = $this->key;
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
