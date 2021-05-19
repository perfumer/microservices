<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Records;

class DeleteRecordsRequest extends \Perfumer\Microservices\Request
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
     * @var string
     */
    public $thread = null;

    public function __construct()
    {
        $this->_request_url = '/records';
        $this->_request_method = 'delete';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->badge_user = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->sender = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'collection' => $this->collection,
        'badge_user' => $this->badge_user,
        'recipient' => $this->recipient,
        'sender' => $this->sender,
        'thread' => $this->thread,
        ];
    }
}
