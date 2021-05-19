<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Records;

class ReadRecordsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var string
     */
    public $recipient = null;

    /**
     * @var string
     */
    public $badge_user = null;

    public function __construct()
    {
        $this->_request_url = '/records/read';
        $this->_request_method = 'post';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->badge_user = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'collection' => $this->collection,
        'recipient' => $this->recipient,
        'badge_user' => $this->badge_user,
        ];
    }
}
