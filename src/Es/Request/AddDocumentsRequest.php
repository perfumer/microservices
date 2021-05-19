<?php

namespace Perfumer\Microservices\Es\Request;

use Perfumer\Microservices\Request;

class AddDocumentsRequest extends Request
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var array
     */
    public $documents;

    public function getBody(): array
    {
        return [
            'index'     => $this->index,
            'documents' => $this->documents,
        ];
    }
}