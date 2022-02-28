<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Article;

class SaveArticleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $image = null;

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
        $this->_request_url = '/article';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->category_id = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->ticket_modules = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->image instanceof \Perfumer\Microservices\Undefined) {
            $array['image'] = $this->image;
        }
        if (!$this->category_id instanceof \Perfumer\Microservices\Undefined) {
            $array['category_id'] = $this->category_id;
        }
        if (!$this->title instanceof \Perfumer\Microservices\Undefined) {
            $array['title'] = $this->title;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->html instanceof \Perfumer\Microservices\Undefined) {
            $array['html'] = $this->html;
        }
        if (!$this->json instanceof \Perfumer\Microservices\Undefined) {
            $array['json'] = $this->json;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->ticket_modules instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_modules'] = $this->ticket_modules;
        }

        return $array;
    }
}
