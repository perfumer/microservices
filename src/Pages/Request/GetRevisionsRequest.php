<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;

class GetRevisionsRequest extends Request
{
    /**
     * @var int
     */
    public $page_id;
}
