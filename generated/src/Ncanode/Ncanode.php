<?php

namespace Generated\Perfumer\Microservices\Ncanode;

abstract class Ncanode extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Ncanode\Ncanode
{
    public function doValidate(\Perfumer\Microservices\Ncanode\Request\Validate\DoValidateRequest $request): \Perfumer\Microservices\Ncanode\Response\Validate\DoValidateResponse
    {
        /** @var \Perfumer\Microservices\Ncanode\Response\Validate\DoValidateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Ncanode\Response\Validate\DoValidateResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'validate');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->validate = $item;
        }

        return $response;
    }

    public function getSignature(\Perfumer\Microservices\Ncanode\Request\Signature\GetSignatureRequest $request): \Perfumer\Microservices\Ncanode\Response\Signature\GetSignatureResponse
    {
        /** @var \Perfumer\Microservices\Ncanode\Response\Signature\GetSignatureResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Ncanode\Response\Signature\GetSignatureResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'signature');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signature = $item;
        }

        return $response;
    }

    public function deleteSignature(\Perfumer\Microservices\Ncanode\Request\Signature\DeleteSignatureRequest $request): \Perfumer\Microservices\Ncanode\Response\Signature\DeleteSignatureResponse
    {
        /** @var \Perfumer\Microservices\Ncanode\Response\Signature\DeleteSignatureResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Ncanode\Response\Signature\DeleteSignatureResponse());

        return $response;
    }

    public function createSignature(\Perfumer\Microservices\Ncanode\Request\Signature\CreateSignatureRequest $request): \Perfumer\Microservices\Ncanode\Response\Signature\CreateSignatureResponse
    {
        /** @var \Perfumer\Microservices\Ncanode\Response\Signature\CreateSignatureResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Ncanode\Response\Signature\CreateSignatureResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'signature');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signature = $item;
        }

        return $response;
    }

    public function getSignatures(\Perfumer\Microservices\Ncanode\Request\Signatures\GetSignaturesRequest $request): \Perfumer\Microservices\Ncanode\Response\Signatures\GetSignaturesResponse
    {
        /** @var \Perfumer\Microservices\Ncanode\Response\Signatures\GetSignaturesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Ncanode\Response\Signatures\GetSignaturesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'signatures');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signatures = $item;
        }

        return $response;
    }

    public function doOrigin(\Perfumer\Microservices\Ncanode\Request\Origin\DoOriginRequest $request): \Perfumer\Microservices\Ncanode\Response\Origin\DoOriginResponse
    {
        /** @var \Perfumer\Microservices\Ncanode\Response\Origin\DoOriginResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Ncanode\Response\Origin\DoOriginResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'origin');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->origin = $item;
        }

        return $response;
    }

    public function validateCms(\Perfumer\Microservices\Ncanode\Request\Cms\ValidateCmsRequest $request): \Perfumer\Microservices\Ncanode\Response\Cms\ValidateCmsResponse
    {
        /** @var \Perfumer\Microservices\Ncanode\Response\Cms\ValidateCmsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Ncanode\Response\Cms\ValidateCmsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'cms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cms = $item;
        }

        return $response;
    }

    public function extractCms(\Perfumer\Microservices\Ncanode\Request\Cms\ExtractCmsRequest $request): \Perfumer\Microservices\Ncanode\Response\Cms\ExtractCmsResponse
    {
        /** @var \Perfumer\Microservices\Ncanode\Response\Cms\ExtractCmsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Ncanode\Response\Cms\ExtractCmsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'data');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->data = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'cms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cms = $item;
        }

        return $response;
    }
}
