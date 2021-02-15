<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Comment;

class UpdateCommentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $text = null;

    /**
     * @var string
     */
    public $author_id = null;

    /**
     * @var bool
     */
    public $is_removed = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->is_removed = new \Perfumer\Microservices\Undefined();
    }
}
