<?php

namespace Generated\Perfumer\Microservices\Otp;

abstract class Otp extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Otp\Otp
{
    public function getSms(\Perfumer\Microservices\Otp\Request\Sms\GetSmsRequest $request): \Perfumer\Microservices\Otp\Response\Sms\GetSmsResponse
    {
        $url = '/sms/check';

        /** @var \Perfumer\Microservices\Otp\Response\Sms\GetSmsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Otp\Response\Sms\GetSmsResponse(), 'get', $url, [
        'phone' => $request->phone,
        'password' => $request->password,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'sms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->sms = $item;
        }

        return $response;
    }

    public function saveSms(\Perfumer\Microservices\Otp\Request\Sms\SaveSmsRequest $request): \Perfumer\Microservices\Otp\Response\Sms\SaveSmsResponse
    {
        $url = '/sms';

        /** @var \Perfumer\Microservices\Otp\Response\Sms\SaveSmsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Otp\Response\Sms\SaveSmsResponse(), 'post', $url, [
        'ip' => $request->ip,
        'phone' => $request->phone,
        'password' => $request->password,
        'message' => $request->message,
        'lifetime' => $request->lifetime,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'sms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->sms = $item;
        }

        return $response;
    }

    public function saveLimitPhone(\Perfumer\Microservices\Otp\Request\Sms\SaveLimitPhoneRequest $request): \Perfumer\Microservices\Otp\Response\Sms\SaveLimitPhoneResponse
    {
        $url = '/limit/sms';

        /** @var \Perfumer\Microservices\Otp\Response\Sms\SaveLimitPhoneResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Otp\Response\Sms\SaveLimitPhoneResponse(), 'post', $url, [
        'ips' => $request->ips,
        'phones' => $request->phones,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'sms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->sms = $item;
        }

        return $response;
    }

    public function getEmail(\Perfumer\Microservices\Otp\Request\Email\GetEmailRequest $request): \Perfumer\Microservices\Otp\Response\Email\GetEmailResponse
    {
        $url = '/email/check';

        /** @var \Perfumer\Microservices\Otp\Response\Email\GetEmailResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Otp\Response\Email\GetEmailResponse(), 'get', $url, [
        'email' => $request->email,
        'password' => $request->password,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'email');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->email = $item;
        }

        return $response;
    }

    public function saveEmail(\Perfumer\Microservices\Otp\Request\Email\SaveEmailRequest $request): \Perfumer\Microservices\Otp\Response\Email\SaveEmailResponse
    {
        $url = '/email';

        /** @var \Perfumer\Microservices\Otp\Response\Email\SaveEmailResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Otp\Response\Email\SaveEmailResponse(), 'post', $url, [
        'ip' => $request->ip,
        'email' => $request->email,
        'password' => $request->password,
        'subject' => $request->subject,
        'text' => $request->text,
        'html' => $request->html,
        'lifetime' => $request->lifetime,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'email');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->email = $item;
        }

        return $response;
    }

    public function saveLimitEmails(\Perfumer\Microservices\Otp\Request\Email\SaveLimitEmailsRequest $request): \Perfumer\Microservices\Otp\Response\Email\SaveLimitEmailsResponse
    {
        $url = '/limit/emails';

        /** @var \Perfumer\Microservices\Otp\Response\Email\SaveLimitEmailsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Otp\Response\Email\SaveLimitEmailsResponse(), 'post', $url, [
        'ips' => $request->ips,
        'emails' => $request->emails,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'email');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->email = $item;
        }

        return $response;
    }
}
