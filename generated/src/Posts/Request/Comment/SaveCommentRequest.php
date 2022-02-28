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
        $this->_request_url = '/comment';
        $this->_request_method = 'post';
        $this->post_id = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->parent_id = new \Perfumer\Microservices\Undefined();
        $this->files = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->post_id instanceof \Perfumer\Microservices\Undefined) {
            $array['post_id'] = $this->post_id;
        }
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }
        if (!$this->author_id instanceof \Perfumer\Microservices\Undefined) {
            $array['author_id'] = $this->author_id;
        }
        if (!$this->status instanceof \Perfumer\Microservices\Undefined) {
            $array['status'] = $this->status;
        }
        if (!$this->parent_id instanceof \Perfumer\Microservices\Undefined) {
            $array['parent_id'] = $this->parent_id;
        }
        if (!$this->files instanceof \Perfumer\Microservices\Undefined) {
            $array['files'] = $this->files;
        }

        return $array;
    }
}
