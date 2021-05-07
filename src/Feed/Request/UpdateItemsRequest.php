<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class UpdateItemsRequest extends Request
{

    /**
     * @var string $collection
     */
    public string $collection;

    /**
     * @var array $where
     */
    public array $where;

    /**
     * @var array $set
     */
    public array $set;
}