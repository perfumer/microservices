<?php

namespace Perfumer\Microservices\Annotation;

use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;

/**
 * @Annotation
 * @Target("CLASS")
 */
class UpsertMeshModel extends UpsertModel
{
    public function onCreate(): void
    {
        $this->fields = array_merge($this->fields, ['parents.array', 'children.array']);

        parent::onCreate();
    }
}
