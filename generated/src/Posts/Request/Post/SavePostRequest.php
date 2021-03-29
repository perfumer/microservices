<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Post;

class SavePostRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $title = null;

    /**
     * @var string
     */
    public $author_id = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var string
     */
    public $image = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $html = null;

    /**
     * @var string
     */
    public $json = null;

    /**
     * @var bool
     */
    public $is_disabled = null;

    /**
     * @var string
     */
    public $tags = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $modules = null;

    /**
     * @var bool
     */
    public $is_comments_disable = null;

    /**
     * @var bool
     */
    public $is_rating_disable = null;

    public function __construct()
    {
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->modules = new \Perfumer\Microservices\Undefined();
        $this->is_comments_disable = new \Perfumer\Microservices\Undefined();
        $this->is_rating_disable = new \Perfumer\Microservices\Undefined();
    }
}
