<?php

namespace Perfumer\Microservices\Crm;

use Perfumer\Microservices\Crm\Request\Ticket\CloseTicketRequest;
use Perfumer\Microservices\Crm\Response\Ticket\CloseTicketResponse;

class Crm extends \Generated\Perfumer\Microservices\Crm\Crm
{
    public function __construct($host)
    {
        $this->host = $host;
    }

    public function closeTicket(CloseTicketRequest $request): CloseTicketResponse
    {
        $url = '/ticket/close';

        /** @var CloseTicketResponse $response */
        $response = $this->doRequest(new CloseTicketResponse(), 'post', $url, [
            'id' => $request->id,
            'code' => $request->code,
        ]);

        return $response;
    }
}
