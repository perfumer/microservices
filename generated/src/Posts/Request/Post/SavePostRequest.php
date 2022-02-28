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
    public $is_comments_enabled = null;

    /**
     * @var bool
     */
    public $is_likes_enabled = null;

    /**
     * @var array
     */
    public $quizzes = [
    ];

    public function __construct()
    {
        $this->_request_url = '/post';
        $this->_request_method = 'post';
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
        $this->is_comments_enabled = new \Perfumer\Microservices\Undefined();
        $this->is_likes_enabled = new \Perfumer\Microservices\Undefined();
        $this->quizzes = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->title instanceof \Perfumer\Microservices\Undefined) {
            $array['title'] = $this->title;
        }
        if (!$this->author_id instanceof \Perfumer\Microservices\Undefined) {
            $array['author_id'] = $this->author_id;
        }
        if (!$this->status instanceof \Perfumer\Microservices\Undefined) {
            $array['status'] = $this->status;
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
        if (!$this->quizzes instanceof \Perfumer\Microservices\Undefined) {
            $array['quizzes'] = $this->quizzes;
        }

        return $array;
    }
}
