<?php

namespace Generated\Perfumer\Microservices\I18n\Request\Translations;

class GetTranslationsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var bool
     */
    public $count = null;

    /**
     * @var string
     */
    public $text = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var string
     */
    public $key = null;

    /**
     * @var string
     */
    public $is_immutable = null;

    /**
     * @var string
     */
    public $is_richtext = null;

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    public function __construct()
    {
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->key = new \Perfumer\Microservices\Undefined();
        $this->is_immutable = new \Perfumer\Microservices\Undefined();
        $this->is_richtext = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
    }
}