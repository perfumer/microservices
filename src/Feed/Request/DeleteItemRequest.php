<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class DeleteItemRequest extends Request
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
     * @var int $id
     */
    public int $id;
}