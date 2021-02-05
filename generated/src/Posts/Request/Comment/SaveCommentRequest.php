<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Comment;

class SaveCommentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $post_id = null;

    /**
     * @var string
     */
    public $text = null;

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
    public $parent_id = null;

    /**
     * @var string
     */
    public $files = null;

    public function __construct()
    {
        $this->post_id = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->parent_id = new \Perfumer\Microservices\Undefined();
        $this->files = new \Perfumer\Microservices\Undefined();
    }
}
