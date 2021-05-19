<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Record;

class DeleteRecordRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var string
     */
    public $badge_user = null;

    /**
     * @var string
     */
    public $recipient = null;

    /**
     * @var string
     */
    public $sender = null;

    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/record';
        $this->_request_method = 'delete';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->badge_user = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->sender = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'collection' => $this->collection,
        'badge_user' => $this->badge_user,
        'recipient' => $this->recipient,
        'sender' => $this->sender,
        'id' => $this->id,
        ];
    }
}
