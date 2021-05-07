<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class DeleteItemsRequest extends Request
{

    /**
     * @var string $collection
     */
    public string $collection;

    /**
     * @var string $badge_user
     */
    public string $badge_user;

    /**
     * @var string $recipient
     */
    public string $recipient;

    /**
     * @var string $sender
     */
    public string $sender;

    /**
     * @var string $thread
     */
    public string $thread;
}