<?php

namespace Perfumer\Microservices\Ncanode;

class Ncanode extends \Generated\Perfumer\Microservices\Ncanode\Ncanode
{
    /**
     * @var string
     */
    private $segment;

    /**
     * @deprecated
     * @return string|null
     */
    public function getSegment(): ?string
    {
        return $this->segment ?: $this->_tenant;
    }

    /**
     * @deprecated
     * @param string $segment
     */
    public function setSegment(string $segment): void
    {
        $this->segment = $segment;

        $this->addHeader('Api-Segment', $segment);
        $this->addHeader('Api-Tenant', $segment);
    }
}
