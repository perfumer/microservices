<?php

namespace Perfumer\Microservices\Crm;

class Crm extends \Generated\Perfumer\Microservices\Crm\Crm
{
    /**
     * @var string
     */
    private $segment;

    public function __construct($options, $segment = null)
    {
        // BC when first argument was host
        if (!is_array($options)) {
            $options = [
                'host' => $options,
                'segment' => $segment,
            ];
        }

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
