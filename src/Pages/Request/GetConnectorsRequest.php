<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;
use Perfumer\Microservices\RequestTrait\CollectionTrait;

/**
 * @deprecated
 */
class GetConnectorsRequest extends Request
{
    use CollectionTrait;

    /**
     * @var string
     */
    public $type;
}
