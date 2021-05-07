<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class SetItemIsReadRequest extends Request
{

    /**
     * @var string $collection
     */
    public string $collection;

    /**
     * @var int $id
     */
    public string $id;

    /**
     * @var string $recipient
     */
    public string $recipient;

    /**
     * @var string $sender
     */
    public string $sender;

    /**
     * @var string $badge_user
     */
    public string $badge_user;
}