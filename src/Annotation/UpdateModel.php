<?php

namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class UpdateModel extends SaveModel
{
    /**
     * @var string
     */
    public $action = 'update';

    /**
     * @var string
     */
    public $request_method = 'patch';

    public function onCreate(): void
    {
        $this->fields = array_merge($this->fields, ['id.int', 'code']);

        parent::onCreate();
    }
}
