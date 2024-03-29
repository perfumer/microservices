<?php

namespace Generated\Perfumer\Microservices\Otp;

abstract class Otp extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Otp\Otp
{
    public function getSms(\Perfumer\Microservices\Otp\Request\Sms\GetSmsRequest $request): \Perfumer\Microservices\Otp\Response\Sms\GetSmsResponse
    {
        /** @var \Perfumer\Microservices\Otp\Response\Sms\GetSmsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Otp\Response\Sms\GetSmsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'sms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->sms = $item;
        }

        return $response;
    }

    public function saveSms(\Perfumer\Microservices\Otp\Request\Sms\SaveSmsRequest $request): \Perfumer\Microservices\Otp\Response\Sms\SaveSmsResponse
    {
        /** @var \Perfumer\Microservices\Otp\Response\Sms\SaveSmsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Otp\Response\Sms\SaveSmsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'sms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->sms = $item;
        }

        return $response;
    }

    public function saveCall(\Perfumer\Microservices\Otp\Request\Call\SaveCallRequest $request): \Perfumer\Microservices\Otp\Response\Call\SaveCallResponse
    {
        /** @var \Perfumer\Microservices\Otp\Response\Call\SaveCallResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Otp\Response\Call\SaveCallResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'call');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->call = $item;
        }

        return $response;
    }

    public function saveLimitPhone(\Perfumer\Microservices\Otp\Request\Sms\SaveLimitPhoneRequest $request): \Perfumer\Microservices\Otp\Response\Sms\SaveLimitPhoneResponse
    {
        /** @var \Perfumer\Microservices\Otp\Response\Sms\SaveLimitPhoneResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Otp\Response\Sms\SaveLimitPhoneResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'sms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->sms = $item;
        }

        return $response;
    }

    public function saveLimitPhoneCall(\Perfumer\Microservices\Otp\Request\Call\SaveLimitPhoneCallRequest $request): \Perfumer\Microservices\Otp\Response\Call\SaveLimitPhoneCallResponse
    {
        /** @var \Perfumer\Microservices\Otp\Response\Call\SaveLimitPhoneCallResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Otp\Response\Call\SaveLimitPhoneCallResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'call');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->call = $item;
        }

        return $response;
    }

    public function getEmail(\Perfumer\Microservices\Otp\Request\Email\GetEmailRequest $request): \Perfumer\Microservices\Otp\Response\Email\GetEmailResponse
    {
        /** @var \Perfumer\Microservices\Otp\Response\Email\GetEmailResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Otp\Response\Email\GetEmailResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'email');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->email = $item;
        }

        return $response;
    }

    public function saveEmail(\Perfumer\Microservices\Otp\Request\Email\SaveEmailRequest $request): \Perfumer\Microservices\Otp\Response\Email\SaveEmailResponse
    {
        /** @var \Perfumer\Microservices\Otp\Response\Email\SaveEmailResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Otp\Response\Email\SaveEmailResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'email');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->email = $item;
        }

        return $response;
    }

    public function saveLimitEmails(\Perfumer\Microservices\Otp\Request\Email\SaveLimitEmailsRequest $request): \Perfumer\Microservices\Otp\Response\Email\SaveLimitEmailsResponse
    {
        /** @var \Perfumer\Microservices\Otp\Response\Email\SaveLimitEmailsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Otp\Response\Email\SaveLimitEmailsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'email');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->email = $item;
        }

        return $response;
    }

    public function getTarget(\Perfumer\Microservices\Otp\Request\Target\GetTargetRequest $request): \Perfumer\Microservices\Otp\Response\Target\GetTargetResponse
    {
        /** @var \Perfumer\Microservices\Otp\Response\Target\GetTargetResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Otp\Response\Target\GetTargetResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'target');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->target = $item;
        }

        return $response;
    }
}
