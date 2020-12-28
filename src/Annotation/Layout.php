<?php

namespace Perfumer\Microservices\Annotation;

use Perfumerlabs\Perfumer\ContractClassAnnotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class Layout extends ContractClassAnnotation
{
    public function onBuild(): void
    {
        parent::onBuild();

        $generator = $this->getBaseClassData()->getGenerator();

        $generator->setExtendedClass('\\Perfumer\\Microservices\\Microservice');
    }
}
