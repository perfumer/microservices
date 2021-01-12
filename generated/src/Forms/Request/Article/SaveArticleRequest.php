<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Article;

class SaveArticleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $html = null;

    /**
     * @var string
     */
    public $json = null;

    /**
     * @var string
     */
    public $locale = null;

    public function __construct()
    {
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
    }
}
