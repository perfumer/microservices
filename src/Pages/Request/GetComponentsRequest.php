<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;
use Perfumer\Microservices\RequestTrait\CollectionTrait;

class GetComponentsRequest extends Request
{
    use CollectionTrait;

    /**
     * @var int
     */
    public $category_id;
}
