<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Record;

class CreateRecordRequest extends \Perfumer\Microservices\Request
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
    public $websocket_channel = null;

    /**
     * @var string
     */
    public $badge_user = null;

    /**
     * @var string
     */
    public $sender = null;

    /**
     * @var string
     */
    public $thread = null;

    /**
     * @var string
     */
    public $title = null;

    /**
     * @var string
     */
    public $text = null;

    /**
     * @var string
     */
    public $image = null;

    /**
     * @var string
     */
    public $created_at = null;

    /**
     * @var string
     */
    public $payload = null;

    public function __construct()
    {
        $this->_request_url = '/record';
        $this->_request_method = 'post';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->websocket_channel = new \Perfumer\Microservices\Undefined();
        $this->badge_user = new \Perfumer\Microservices\Undefined();
        $this->sender = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->created_at = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }
        if (!$this->recipient instanceof \Perfumer\Microservices\Undefined) {
            $array['recipient'] = $this->recipient;
        }
        if (!$this->websocket_channel instanceof \Perfumer\Microservices\Undefined) {
            $array['websocket_channel'] = $this->websocket_channel;
        }
        if (!$this->badge_user instanceof \Perfumer\Microservices\Undefined) {
            $array['badge_user'] = $this->badge_user;
        }
        if (!$this->sender instanceof \Perfumer\Microservices\Undefined) {
            $array['sender'] = $this->sender;
        }
        if (!$this->thread instanceof \Perfumer\Microservices\Undefined) {
            $array['thread'] = $this->thread;
        }
        if (!$this->title instanceof \Perfumer\Microservices\Undefined) {
            $array['title'] = $this->title;
        }
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }
        if (!$this->image instanceof \Perfumer\Microservices\Undefined) {
            $array['image'] = $this->image;
        }
        if (!$this->created_at instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at'] = $this->created_at;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }

        return $array;
    }
}
