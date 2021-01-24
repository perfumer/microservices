<?php

namespace Perfumer\Microservices\Crm;

use Perfumer\Microservices\Crm\Request\Task\CloseTaskRequest;
use Perfumer\Microservices\Crm\Request\Ticket\CloseTicketRequest;
use Perfumer\Microservices\Crm\Response\Task\CloseTaskResponse;
use Perfumer\Microservices\Crm\Response\Ticket\CloseTicketResponse;

class Crm extends \Generated\Perfumer\Microservices\Crm\Crm
{
    public function __construct($host)
    {
        $this->host = $host;
    }

    public function closeTask(CloseTaskRequest $request): CloseTaskResponse
    {
        $url = '/task/close';

        /** @var CloseTaskResponse $response */
        $response = $this->doRequest(new CloseTaskResponse(), 'post', $url, [
            'code' => $request->code,
            'status' => $request->status,
        ]);

        return $response;
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
