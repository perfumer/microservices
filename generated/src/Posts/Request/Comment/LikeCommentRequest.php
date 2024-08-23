<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Comment;

class LikeCommentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $rater_id;

    /**
     * @var string
     */
    public $post_id;

    /**
     * @var string
     */
    public $comment_id;

    public function __construct()
    {
        $this->_request_url = '/comment/like';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->rater_id = new \Perfumer\Microservices\Undefined();
        $this->post_id = new \Perfumer\Microservices\Undefined();
        $this->comment_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->rater_id instanceof \Perfumer\Microservices\Undefined) {
            $array['rater_id'] = $this->rater_id;
        }
        if (!$this->post_id instanceof \Perfumer\Microservices\Undefined) {
            $array['post_id'] = $this->post_id;
        }
        if (!$this->comment_id instanceof \Perfumer\Microservices\Undefined) {
            $array['comment_id'] = $this->comment_id;
        }

        return $array;
    }
}
