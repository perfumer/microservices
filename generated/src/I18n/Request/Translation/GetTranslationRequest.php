<?php

namespace Generated\Perfumer\Microservices\I18n\Request\Translation;

class GetTranslationRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $key = null;

    public function __construct()
    {
        $this->_request_url = '/translation';
        $this->_request_method = 'get';
        $this->key = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->key instanceof \Perfumer\Microservices\Undefined) {
            $array['key'] = $this->key;
        }

        return $array;
    }
}
