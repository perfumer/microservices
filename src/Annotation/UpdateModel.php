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
}
