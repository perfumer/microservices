<?php

namespace Perfumer\Microservices\I18n\Request;

use Perfumer\Microservices\Request;
use Perfumer\Microservices\RequestTrait\CollectionTrait;

class GetTranslationsRequest extends Request
{
    use CollectionTrait;

    /**
     * @var string
     */
    public $locale;
}
