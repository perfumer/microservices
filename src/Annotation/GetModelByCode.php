<?php

namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class GetModelByCode extends GetModel
{
    /**
     * @var array
     */
    public $fields = ['code'];
}
