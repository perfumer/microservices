<?php

namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class DeleteModelByCode extends DeleteModel
{
    /**
     * @var array
     */
    public $fields = ['code'];
}
