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
    public $locale;

    public function getBody(): array
    {
        $data = [
            'index' => $this->index,
            'code'  => $this->code,
        ];

        if ($this->locale) {
            $data['locale'] = $this->locale;
        }

        return $data;
    }
}