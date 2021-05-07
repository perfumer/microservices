<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Record;

class Saveis_unreadRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $badge_user = null;

    public function __construct()
    {
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->badge_user = new \Perfumer\Microservices\Undefined();
    }
}
