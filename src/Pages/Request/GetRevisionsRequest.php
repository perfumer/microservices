<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;
use Perfumer\Microservices\RequestTrait\CollectionTrait;

class GetRevisionsRequest extends Request
{
    use CollectionTrait;

    /**
     * @var int
     */
    public $page_id;
}
