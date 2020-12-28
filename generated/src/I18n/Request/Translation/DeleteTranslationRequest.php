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
        $this->key = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
    }
}
