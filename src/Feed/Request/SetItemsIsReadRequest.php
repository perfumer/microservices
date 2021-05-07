<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class SetItemsIsReadRequest extends Request
{

    /**
     * @var string $collection
     */
    public string $collection;

    /**
     * @var string $recipient
     */
    public string $recipient;

    /**
     * @var string $badge_user
     */
    public string $badge_user;
}