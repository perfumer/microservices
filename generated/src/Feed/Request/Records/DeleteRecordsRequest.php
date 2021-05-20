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
        $array = [];
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }
        if (!$this->badge_user instanceof \Perfumer\Microservices\Undefined) {
            $array['badge_user'] = $this->badge_user;
        }
        if (!$this->recipient instanceof \Perfumer\Microservices\Undefined) {
            $array['recipient'] = $this->recipient;
        }
        if (!$this->sender instanceof \Perfumer\Microservices\Undefined) {
            $array['sender'] = $this->sender;
        }
        if (!$this->thread instanceof \Perfumer\Microservices\Undefined) {
            $array['thread'] = $this->thread;
        }

        return $array;
    }
}
