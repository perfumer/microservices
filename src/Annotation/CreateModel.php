<?php

namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class CreateModel extends SaveModel
{
    /**
     * @var string
     */
    public $action = 'create';

    public function onCreate(): void
    {
        $this->fields = array_merge($this->fields, ['code']);

        parent::onCreate();
    }
}
