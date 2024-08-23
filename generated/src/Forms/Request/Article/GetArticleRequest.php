<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Article;

class GetArticleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/article';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
