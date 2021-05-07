<?php

namespace Perfumer\Microservices\Feed\Response;

use Perfumer\Microservices\Response;

class GetItemResponse extends Response
{
    /**
     * @var array $record
     */
    public ?array $record;
}