<?php

namespace Perfumer\Microservices\I18n\Request;

use Perfumer\Microservices\Request;

class SaveTranslationRequest extends Request
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var array
     */
    public $text;
}
