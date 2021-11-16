<?php

namespace Generated\Perfumer\Microservices\Email;

abstract class Email extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Email\Email
{
    public function sendSmtp(\Perfumer\Microservices\Email\Request\Smtp\SendSmtpRequest $request): \Perfumer\Microservices\Email\Response\Smtp\SendSmtpResponse
    {
        /** @var \Perfumer\Microservices\Email\Response\Smtp\SendSmtpResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Email\Response\Smtp\SendSmtpResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'smtp');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->smtp = $item;
        }

        return $response;
    }
}
