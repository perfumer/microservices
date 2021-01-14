<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Article;

class SaveArticleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    /**
     * @var int
     */
    public $category_id = null;

    /**
     * @var string
     */
    public $title = null;

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

    /**
     * @var array
     */
    public $ticket_modules = [
    ];

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->category_id = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->ticket_modules = new \Perfumer\Microservices\Undefined();
    }
}
