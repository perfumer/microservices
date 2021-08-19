<?php

namespace Generated\Perfumer\Microservices\Box;

abstract class Box extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Box\Box
{
    public function countDocuments(\Perfumer\Microservices\Box\Request\Documents\CountDocumentsRequest $request): \Perfumer\Microservices\Box\Response\Documents\CountDocumentsResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Documents\CountDocumentsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Documents\CountDocumentsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'documents');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->documents = $item;
        }

        return $response;
    }

    public function getDocument(\Perfumer\Microservices\Box\Request\Document\GetDocumentRequest $request): \Perfumer\Microservices\Box\Response\Document\GetDocumentResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Document\GetDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Document\GetDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function createDocument(\Perfumer\Microservices\Box\Request\Document\CreateDocumentRequest $request): \Perfumer\Microservices\Box\Response\Document\CreateDocumentResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Document\CreateDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Document\CreateDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }
}
