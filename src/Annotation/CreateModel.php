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
}
