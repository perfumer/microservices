<?php

namespace Generated\Perfumer\Microservices\Ncanode;

abstract class Ncanode extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Ncanode\Ncanode
{
    public function getSignature(\Perfumer\Microservices\Ncanode\Request\Signature\GetSignatureRequest $request): \Perfumer\Microservices\Ncanode\Response\Signature\GetSignatureResponse
    {
        $url = '/signature';

        /** @var \Perfumer\Microservices\Ncanode\Response\Signature\GetSignatureResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Ncanode\Response\Signature\GetSignatureResponse(), 'get', $url, [
        'id' => $request->id,
        'parent' => $request->parent,
        'document' => $request->document,
        'chain' => $request->chain,
        'stage' => $request->stage,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'signature');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signature = $item;
        }

        return $response;
    }

    public function deleteSignature(\Perfumer\Microservices\Ncanode\Request\Signature\DeleteSignatureRequest $request): \Perfumer\Microservices\Ncanode\Response\Signature\DeleteSignatureResponse
    {
        $url = '/signature';

        /** @var \Perfumer\Microservices\Ncanode\Response\Signature\DeleteSignatureResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Ncanode\Response\Signature\DeleteSignatureResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug);

        return $response;
    }

    public function saveSignature(\Perfumer\Microservices\Ncanode\Request\Signature\SaveSignatureRequest $request): \Perfumer\Microservices\Ncanode\Response\Signature\SaveSignatureResponse
    {
        $url = '/signature';

        /** @var \Perfumer\Microservices\Ncanode\Response\Signature\SaveSignatureResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Ncanode\Response\Signature\SaveSignatureResponse(), 'post', $url, [
        'document' => $request->document,
        'chain' => $request->chain,
        'stage' => $request->stage,
        'parent' => $request->parent,
        'signature' => $request->signature,
        'tags' => $request->tags,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'signature');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signature = $item;
        }

        return $response;
    }

    public function getSignatures(\Perfumer\Microservices\Ncanode\Request\Signatures\GetSignaturesRequest $request): \Perfumer\Microservices\Ncanode\Response\Signatures\GetSignaturesResponse
    {
        $url = '/signatures';

        /** @var \Perfumer\Microservices\Ncanode\Response\Signatures\GetSignaturesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Ncanode\Response\Signatures\GetSignaturesResponse(), 'get', $url, [
        'document' => $request->document,
        'chain' => $request->chain,
        'stage' => $request->stage,
        'tags' => $request->tags,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
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
        $url = '/origin';

        /** @var \Perfumer\Microservices\Ncanode\Response\Origin\DoOriginResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Ncanode\Response\Origin\DoOriginResponse(), 'post', $url, [
        'method' => $request->method,
        'version' => $request->version,
        'params' => $request->params,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'origin');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->origin = $item;
        }

        return $response;
    }

    public function doValidate(\Perfumer\Microservices\Ncanode\Request\Validate\DoValidateRequest $request): \Perfumer\Microservices\Ncanode\Response\Validate\DoValidateResponse
    {
        $url = '/validate';

        /** @var \Perfumer\Microservices\Ncanode\Response\Validate\DoValidateResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Ncanode\Response\Validate\DoValidateResponse(), 'post', $url, [
        'cms' => $request->cms,
        'xml' => $request->xml,
        'iin' => $request->iin,
        'bin' => $request->bin,
        'rule' => $request->rule,
        'expiration' => $request->expiration,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'validate');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->validate = $item;
        }

        return $response;
    }
}
