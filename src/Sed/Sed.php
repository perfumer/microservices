<?php

namespace Perfumer\Microservices\Sed;

class Sed extends \Generated\Perfumer\Microservices\Sed\Sed
{
    /**
     * @var string
     */
    private $segment;

    public function __construct(array $options = [])
    {
        parent::__construct($options);

        $this->segment = $options['segment'] ?? null;

        if ($this->segment !== null && $this->segment !== '') {
            $this->addHeader('Api-Segment', $this->segment);
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
