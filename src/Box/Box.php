<?php

namespace Perfumer\Microservices\Box;

class Box extends \Generated\Perfumer\Microservices\Box\Box
{
    /**
     * @var string
     */
    protected $secret;

    public function __construct($host, $secret)
    {
        $this->host = $host;
        $this->secret = $secret;

        $this->addHeader('Api-Secret', $secret);
    }

    /**
     * @return string
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     */
    public function setSecret(string $secret): void
    {
        $this->secret = $secret;

        $this->addHeader('Api-Secret', $secret);
    }
}
