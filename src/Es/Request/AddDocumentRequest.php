<?php

namespace Perfumer\Microservices\Es\Request;

use Perfumer\Microservices\Request;

class AddDocumentRequest extends Request
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $locale;
}