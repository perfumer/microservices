<?php

namespace Generated\Perfumer\Microservices\I18n\Request\Translations;

class SaveTranslationsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $translations;

    public function __construct()
    {
        $this->_request_url = '/translations';
        $this->_request_method = 'post';
        $this->translations = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->translations instanceof \Perfumer\Microservices\Undefined) {
            $array['translations'] = $this->translations;
        }

        return $array;
    }
}
