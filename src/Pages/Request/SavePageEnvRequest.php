<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;

class SavePageEnvRequest extends Request
{
    /**
     * @var int
     */
    public $page_id;

    /**
     * @var int
     */
    public $revision_id;

    /**
     * @var string
     */
    public $env;
}
