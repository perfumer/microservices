<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Article;

class GetArticleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }
}
