<?php

namespace Generated\Perfumer\Microservices\Events\Request\Review;

class CreateReviewRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $author_id = null;

    /**
     * @var string
     */
    public $event = null;

    /**
     * @var string
     */
    public $rating = null;

    /**
     * @var string
     */
    public $text = null;

    public function __construct()
    {
        $this->_request_url = '/review';
        $this->_request_method = 'post';
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->event = new \Perfumer\Microservices\Undefined();
        $this->rating = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->author_id instanceof \Perfumer\Microservices\Undefined) {
            $array['author_id'] = $this->author_id;
        }
        if (!$this->event instanceof \Perfumer\Microservices\Undefined) {
            $array['event'] = $this->event;
        }
        if (!$this->rating instanceof \Perfumer\Microservices\Undefined) {
            $array['rating'] = $this->rating;
        }
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }

        return $array;
    }
}