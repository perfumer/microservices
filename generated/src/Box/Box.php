<?php

namespace Generated\Perfumer\Microservices\Box;

abstract class Box extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Box\Box
{
    public function getClients(\Perfumer\Microservices\Box\Request\Clients\GetClientsRequest $request): \Perfumer\Microservices\Box\Response\Clients\GetClientsResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Clients\GetClientsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Clients\GetClientsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'clients');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->clients = $item;
        }

        return $response;
    }

    public function getClient(\Perfumer\Microservices\Box\Request\Client\GetClientRequest $request): \Perfumer\Microservices\Box\Response\Client\GetClientResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Client\GetClientResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Client\GetClientResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function createClient(\Perfumer\Microservices\Box\Request\Client\CreateClientRequest $request): \Perfumer\Microservices\Box\Response\Client\CreateClientResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Client\CreateClientResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Client\CreateClientResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function updateClient(\Perfumer\Microservices\Box\Request\Client\UpdateClientRequest $request): \Perfumer\Microservices\Box\Response\Client\UpdateClientResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Client\UpdateClientResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Client\UpdateClientResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function deleteClient(\Perfumer\Microservices\Box\Request\Client\DeleteClientRequest $request): \Perfumer\Microservices\Box\Response\Client\DeleteClientResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Client\DeleteClientResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Client\DeleteClientResponse());

        return $response;
    }

    public function getCollections(\Perfumer\Microservices\Box\Request\Collections\GetCollectionsRequest $request): \Perfumer\Microservices\Box\Response\Collections\GetCollectionsResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Collections\GetCollectionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Collections\GetCollectionsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'collections');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->collections = $item;
        }

        return $response;
    }

    public function getCollection(\Perfumer\Microservices\Box\Request\Collection\GetCollectionRequest $request): \Perfumer\Microservices\Box\Response\Collection\GetCollectionResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Collection\GetCollectionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Collection\GetCollectionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'collection');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->collection = $item;
        }

        return $response;
    }

    public function createCollection(\Perfumer\Microservices\Box\Request\Collection\CreateCollectionRequest $request): \Perfumer\Microservices\Box\Response\Collection\CreateCollectionResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Collection\CreateCollectionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Collection\CreateCollectionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'collection');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->collection = $item;
        }

        return $response;
    }

    public function updateCollection(\Perfumer\Microservices\Box\Request\Collection\UpdateCollectionRequest $request): \Perfumer\Microservices\Box\Response\Collection\UpdateCollectionResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Collection\UpdateCollectionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Collection\UpdateCollectionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'collection');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->collection = $item;
        }

        return $response;
    }

    public function deleteCollection(\Perfumer\Microservices\Box\Request\Collection\DeleteCollectionRequest $request): \Perfumer\Microservices\Box\Response\Collection\DeleteCollectionResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Collection\DeleteCollectionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Collection\DeleteCollectionResponse());

        return $response;
    }

    public function getAccesses(\Perfumer\Microservices\Box\Request\Accesses\GetAccessesRequest $request): \Perfumer\Microservices\Box\Response\Accesses\GetAccessesResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Accesses\GetAccessesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Accesses\GetAccessesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'accesses');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->accesses = $item;
        }

        return $response;
    }

    public function getAccess(\Perfumer\Microservices\Box\Request\Access\GetAccessRequest $request): \Perfumer\Microservices\Box\Response\Access\GetAccessResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Access\GetAccessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Access\GetAccessResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'access');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->access = $item;
        }

        return $response;
    }

    public function createAccess(\Perfumer\Microservices\Box\Request\Access\CreateAccessRequest $request): \Perfumer\Microservices\Box\Response\Access\CreateAccessResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Access\CreateAccessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Access\CreateAccessResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'access');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->access = $item;
        }

        return $response;
    }

    public function deleteAccess(\Perfumer\Microservices\Box\Request\Access\DeleteAccessRequest $request): \Perfumer\Microservices\Box\Response\Access\DeleteAccessResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Access\DeleteAccessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Access\DeleteAccessResponse());

        return $response;
    }

    public function getDocuments(\Perfumer\Microservices\Box\Request\Documents\GetDocumentsRequest $request): \Perfumer\Microservices\Box\Response\Documents\GetDocumentsResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Documents\GetDocumentsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Documents\GetDocumentsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'documents');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->documents = $item;
        }

        return $response;
    }

    public function countDocuments(\Perfumer\Microservices\Box\Request\Documents\CountDocumentsRequest $request): \Perfumer\Microservices\Box\Response\Documents\CountDocumentsResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Documents\CountDocumentsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Documents\CountDocumentsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
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

    public function getDocumentLogs(\Perfumer\Microservices\Box\Request\Document\GetDocumentLogsRequest $request): \Perfumer\Microservices\Box\Response\Document\GetDocumentLogsResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Document\GetDocumentLogsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Document\GetDocumentLogsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'logs');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->logs = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function getDocumentLog(\Perfumer\Microservices\Box\Request\Document\GetDocumentLogRequest $request): \Perfumer\Microservices\Box\Response\Document\GetDocumentLogResponse
    {
        /** @var \Perfumer\Microservices\Box\Response\Document\GetDocumentLogResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Box\Response\Document\GetDocumentLogResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'log');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->log = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }
}
