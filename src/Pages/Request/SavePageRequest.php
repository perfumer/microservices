<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;

class SavePageRequest extends Request
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $address;

    /**
     * @var int
     */
    public $prod_revision_id;

    /**
     * @var int
     */
    public $stage_revision_id;
}
