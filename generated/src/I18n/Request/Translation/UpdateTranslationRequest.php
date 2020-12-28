<?php

namespace Generated\Perfumer\Microservices\I18n\Request\Translation;

class UpdateTranslationRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $key = null;

    /**
     * @var string
     */
    public $new_key = null;

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

    public function __construct()
    {
        $this->key = new \Perfumer\Microservices\Undefined();
        $this->new_key = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->is_immutable = new \Perfumer\Microservices\Undefined();
        $this->is_richtext = new \Perfumer\Microservices\Undefined();
    }
}
