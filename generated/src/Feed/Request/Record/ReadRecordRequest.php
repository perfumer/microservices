<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Record;

class ReadRecordRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $recipient = null;

    /**
     * @var string
     */
    public $sender = null;

    /**
     * @var string
     */
    public $badge_user = null;

    public function __construct()
    {
        $this->_request_url = '/record/read';
        $this->_request_method = 'post';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->sender = new \Perfumer\Microservices\Undefined();
        $this->badge_user = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'collection' => $this->collection,
        'id' => $this->id,
        'recipient' => $this->recipient,
        'sender' => $this->sender,
        'badge_user' => $this->badge_user,
        ];
    }
}
