<?php

namespace Generated\Perfumer\Microservices\Events\Request\Review;

class GetReviewRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $participant_id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/review';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->participant_id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
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
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
