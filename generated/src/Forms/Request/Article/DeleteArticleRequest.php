<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Article;

class DeleteArticleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $locale = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
    }
}
