<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Post;

class DislikePostRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $rater_id = null;

    /**
     * @var string
     */
    public $post_id = null;

    public function __construct()
    {
        $this->_request_url = '/post/dislike';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->rater_id = new \Perfumer\Microservices\Undefined();
        $this->post_id = new \Perfumer\Microservices\Undefined();
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

        return $array;
    }
}
