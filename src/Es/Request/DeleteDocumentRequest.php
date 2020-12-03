<?php

namespace Perfumer\Microservices\Es\Request;

use Perfumer\Microservices\Request;

class DeleteDocumentRequest extends Request
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
    public $locale = 'ru';
}