<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Record;

class UnreadRecordRequest extends \Perfumer\Microservices\Request
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
    public $badge_user = null;

    public function __construct()
    {
        $this->_request_url = '/record/unread';
        $this->_request_method = 'post';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->badge_user = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'collection' => $this->collection,
        'id' => $this->id,
        'badge_user' => $this->badge_user,
        ];
    }
}
