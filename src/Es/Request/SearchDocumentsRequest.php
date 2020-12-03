<?php

namespace Perfumer\Microservices\Es\Request;

use Perfumer\Microservices\Request;

class SearchDocumentsRequest extends Request
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $search;

    /**
     * @var string
     */
    public $locale = 'ru';

    /**
     * @var int
     */
    public $from = 0;

    /**
     * @var int
     */
    public $size = 50;
}