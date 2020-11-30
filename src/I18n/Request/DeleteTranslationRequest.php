<?php

namespace Perfumer\Microservices\I18n\Request;

use Perfumer\Microservices\Request;

class DeleteTranslationRequest extends Request
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
