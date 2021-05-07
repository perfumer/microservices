<?php

namespace Perfumer\Microservices\Feed;


class Feed extends \Generated\Perfumer\Microservices\Feed\Feed
{
    protected bool $dummy;

    public function __construct(string $host, bool $dummy = false)
    {
        $this->host = $host;

        $this->dummy = $dummy;
    }
}
