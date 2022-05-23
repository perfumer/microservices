<?php

namespace Perfumer\Microservices\Crm;

use Perfumer\Microservices\Crm\Request\Ticket\SaveTicketRequest;
use Perfumer\Microservices\Crm\Response\Ticket\SaveTicketResponse;

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
    }

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

    /**
     * @deprecated
     */
    public function saveTicket(SaveTicketRequest $request): SaveTicketResponse
    {
        $response = $this->doRequest($request, new SaveTicketResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'ticket');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ticket = $item;
        }

        return $response;
    }
}
