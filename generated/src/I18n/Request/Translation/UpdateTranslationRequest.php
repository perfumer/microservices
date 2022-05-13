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

    /**
     * @var array
     */
    public $tags = [
    ];

    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/translation';
        $this->_request_method = 'patch';
        $this->key = new \Perfumer\Microservices\Undefined();
        $this->new_key = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->is_immutable = new \Perfumer\Microservices\Undefined();
        $this->is_richtext = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->key instanceof \Perfumer\Microservices\Undefined) {
            $array['key'] = $this->key;
        }
        if (!$this->new_key instanceof \Perfumer\Microservices\Undefined) {
            $array['new_key'] = $this->new_key;
        }
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }
        if (!$this->is_immutable instanceof \Perfumer\Microservices\Undefined) {
            $array['is_immutable'] = $this->is_immutable;
        }
        if (!$this->is_richtext instanceof \Perfumer\Microservices\Undefined) {
            $array['is_richtext'] = $this->is_richtext;
        }
        if (!$this->tags instanceof \Perfumer\Microservices\Undefined) {
            $array['tags'] = $this->tags;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
