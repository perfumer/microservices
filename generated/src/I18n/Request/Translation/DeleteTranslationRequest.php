<?php

namespace Generated\Perfumer\Microservices\I18n\Request\Translation;

class DeleteTranslationRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $key = null;

    /**
     * @var string
     */
    public $locale = null;

    public function __construct()
    {
        $this->_request_url = '/translation';
        $this->_request_method = 'delete';
        $this->key = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->key instanceof \Perfumer\Microservices\Undefined) {
            $array['key'] = $this->key;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }

        return $array;
    }
}
