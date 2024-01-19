<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Post;

class UpdatePostRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $author_id;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $html;

    /**
     * @var string
     */
    public $json;

    /**
     * @var bool
     */
    public $is_disabled;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $modules;

    /**
     * @var bool
     */
    public $is_comments_enabled;

    /**
     * @var bool
     */
    public $is_likes_enabled;

    public function __construct()
    {
        $this->_request_url = '/post';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->modules = new \Perfumer\Microservices\Undefined();
        $this->is_comments_enabled = new \Perfumer\Microservices\Undefined();
        $this->is_likes_enabled = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->title instanceof \Perfumer\Microservices\Undefined) {
            $array['title'] = $this->title;
        }
        if (!$this->author_id instanceof \Perfumer\Microservices\Undefined) {
            $array['author_id'] = $this->author_id;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->image instanceof \Perfumer\Microservices\Undefined) {
            $array['image'] = $this->image;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->html instanceof \Perfumer\Microservices\Undefined) {
            $array['html'] = $this->html;
        }
        if (!$this->json instanceof \Perfumer\Microservices\Undefined) {
            $array['json'] = $this->json;
        }
        if (!$this->is_disabled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_disabled'] = $this->is_disabled;
        }
        if (!$this->tags instanceof \Perfumer\Microservices\Undefined) {
            $array['tags'] = $this->tags;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->modules instanceof \Perfumer\Microservices\Undefined) {
            $array['modules'] = $this->modules;
        }
        if (!$this->is_comments_enabled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_comments_enabled'] = $this->is_comments_enabled;
        }
        if (!$this->is_likes_enabled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_likes_enabled'] = $this->is_likes_enabled;
        }

        return $array;
    }
}
