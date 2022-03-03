<?php

namespace Generated\Perfumer\Microservices\Events\Request\Review;

class GetReviewRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $participant_id = null;

    public function __construct()
    {
        $this->_request_url = '/review';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->participant_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->participant_id instanceof \Perfumer\Microservices\Undefined) {
            $array['participant_id'] = $this->participant_id;
        }

        return $array;
    }
}