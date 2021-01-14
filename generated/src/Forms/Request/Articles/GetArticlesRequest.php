<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Articles;

class GetArticlesRequest extends \Perfumer\Microservices\Request
{
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
    public $locale = null;

    /**
     * @var string
     */
    public $ticket_module = null;

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    /**
     * @var int
     */
    public $count = null;

    public function __construct()
    {
        $this->category_id = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->ticket_module = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
    }
}
