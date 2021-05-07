<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class CreateItemsRequest extends Request
{


    /**
     * @var string $collection
     */
    public string $collection;

    /**
     * @var array $recipients
     */
    public array $recipients;

    /**
     * @var array $records
     */
    public array $records;
}