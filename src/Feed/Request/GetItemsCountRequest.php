<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class GetItemsCountRequest extends Request
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
     * @var array $where
     */
    public array $where;

    /**
     * @var string $group
     */
    public string $group;
}