<?php

namespace Generated\Perfumer\Microservices\I18n\Request\Translations;

class DumpTranslationsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $search;

    public function __construct()
    {
        $this->_request_url = '/dump';
        $this->_request_method = 'get';
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->search instanceof \Perfumer\Microservices\Undefined) {
            $array['search'] = $this->search;
        }

        return $array;
    }
}
