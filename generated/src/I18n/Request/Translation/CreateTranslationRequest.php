<?php

namespace Generated\Perfumer\Microservices\I18n\Request\Translation;

class CreateTranslationRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $key = null;

    /**
     * @var string
     */
    public $text = null;

    /**
     * @var string
     */
    public $is_immutable = null;

    /**
     * @var string
     */
    public $is_richtext = null;

    /**
     * @var array
     */
    public $tags = [
    ];

    public function __construct()
    {
        $this->key = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->is_immutable = new \Perfumer\Microservices\Undefined();
        $this->is_richtext = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
    }
}
