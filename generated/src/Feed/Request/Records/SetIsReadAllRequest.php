<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Records;

class SetIsReadAllRequest extends \Perfumer\Microservices\Request
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
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->badge_user = new \Perfumer\Microservices\Undefined();
    }
}
