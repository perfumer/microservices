<?php

namespace Perfumer\Microservices\Ncanode;

class Ncanode extends \Generated\Perfumer\Microservices\Ncanode\Ncanode
{
    /**
     * @var string
     */
    private $segment;

    public function __construct($host, $segment)
    {
        $this->host = $host;

        $this->segment = $segment;

        if ($segment !== null && $segment !== '') {
            $this->addHeader('Api-Segment', $segment);
        }
    }

    public function getSegment(): ?string
    {
        return $this->segment;
    }

    public function setSegment(string $segment): void
    {
        $this->segment = $segment;

        $this->addHeader('Api-Segment', $segment);
    }
}
