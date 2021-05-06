<?php

namespace Generated\Perfumer\Microservices\Ncanode;

abstract class Ncanode extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Ncanode\Ncanode
{
    public function getSignature(\Perfumer\Microservices\Ncanode\Request\Signature\GetSignatureRequest $request): \Perfumer\Microservices\Ncanode\Response\Signature\GetSignatureResponse
    {
        $url = '/signature';

        /** @var \Perfumer\Microservices\Ncanode\Response\Signature\GetSignatureResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Ncanode\Response\Signature\GetSignatureResponse(), 'get', $url, [
        'document' => $request->document,
        'thread' => $request->thread,
        ], $request->_debug, $request->_timeout);
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
        'document' => $request->document,
        'thread' => $request->thread,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function createSignature(\Perfumer\Microservices\Ncanode\Request\Signature\CreateSignatureRequest $request): \Perfumer\Microservices\Ncanode\Response\Signature\CreateSignatureResponse
    {
        $url = '/signature';

        /** @var \Perfumer\Microservices\Ncanode\Response\Signature\CreateSignatureResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Ncanode\Response\Signature\CreateSignatureResponse(), 'post', $url, [
        'document' => $request->document,
        'thread' => $request->thread,
        'cms' => $request->cms,
        'tags' => $request->tags,
        'version_comment' => $request->version_comment,
        'version_created_by' => $request->version_created_by,
        ], $request->_debug, $request->_timeout);
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
        'thread' => $request->thread,
        'tag' => $request->tag,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        'id_lt' => $request->id_lt,
        'id_le' => $request->id_le,
        'id_gt' => $request->id_gt,
        'id_ge' => $request->id_ge,
        ], $request->_debug, $request->_timeout);
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
        ], $request->_debug, $request->_timeout);
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
        'criteria' => $request->criteria,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'validate');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->validate = $item;
        }

        return $response;
    }
}
