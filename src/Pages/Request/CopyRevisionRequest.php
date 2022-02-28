<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;

class CopyRevisionRequest extends Request
{
    /**
     * @var int
     */
    public $id;

    public function getBody(): array
    {
        return [
            'id' => $this->id,
        ];
    }
}
