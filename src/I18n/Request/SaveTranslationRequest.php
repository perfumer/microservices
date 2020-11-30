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
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $text;

    /**
     * @var array
     */
    public $batch;
}
