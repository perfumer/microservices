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
    public $locale;

    /**
     * @var int
     */
    public $from = 0;

    /**
     * @var int
     */
    public $size = 50;

    public function getBody(): array
    {
        return [
            'index'  => $this->index,
            'search' => $this->search,
            'locale' => $this->locale,
            'from'   => $this->from,
            'size'   => $this->size,
        ];
    }
}