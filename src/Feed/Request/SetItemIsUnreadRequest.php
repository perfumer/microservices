<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class SetItemIsUnreadRequest extends Request
{

    /**
     * @var string $collection
     */
    public string $collection;

    /**
     * @var int $id
     */
    public int $id;

    /**
     * @var string $badge_user
     */
    public string $badge_user;
}