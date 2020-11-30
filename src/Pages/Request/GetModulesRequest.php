<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;
use Perfumer\Microservices\RequestTrait\CollectionTrait;
use Perfumer\Microservices\RequestTrait\MeshCollectionTrait;

class GetModulesRequest extends Request
{
    use CollectionTrait;
    use MeshCollectionTrait;
}
