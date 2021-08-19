<?php

namespace Perfumer\Microservices\Annotation;

use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;

/**
 * @Annotation
 * @Target("CLASS")
 * @deprecated
 */
class SaveMeshModel extends SaveModel
{
    public function onCreate(): void
    {
        $this->fields = array_merge($this->fields, ['parents.array', 'children.array']);

        parent::onCreate();
    }
}
