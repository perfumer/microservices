<?php

namespace Perfumer\Microservices\I18n\Request;

use Perfumer\Microservices\Request;

class GetTranslationRequest extends Request
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $locale;
}
