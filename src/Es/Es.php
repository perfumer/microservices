<?php

namespace Perfumer\Microservices\Es;

use Perfumer\Microservices\Es\Request\AddDocumentRequest;
use Perfumer\Microservices\Es\Request\AddDocumentsRequest;
use Perfumer\Microservices\Es\Request\CreateIndexRequest;
use Perfumer\Microservices\Es\Request\DeleteDocumentRequest;
use Perfumer\Microservices\Es\Request\DeleteIndexRequest;
use Perfumer\Microservices\Es\Request\SearchDocumentsRequest;
use Perfumer\Microservices\Es\Response\AddDocumentResponse;
use Perfumer\Microservices\Es\Response\AddDocumentsResponse;
use Perfumer\Microservices\Es\Response\CreateIndexResponse;
use Perfumer\Microservices\Es\Response\DeleteDocumentResponse;
use Perfumer\Microservices\Es\Response\DeleteIndexResponse;
use Perfumer\Microservices\Es\Response\SearchDocumentsResponse;

class Es extends \Generated\Perfumer\Microservices\Es\Es
{
    protected $dummy;

    public function __construct($host, bool $dummy = false)
    {
        $this->host = $host;

        $this->dummy = $dummy;
    }

    public function createIndex(CreateIndexRequest $request): CreateIndexResponse
    {
        $response = new CreateIndexResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->name) {
            return $response;
        }

        /** @var CreateIndexResponse $response */
        $response = $this->doRequest(new CreateIndexResponse(), 'post', '/index', ['name' => $request->name]);

        return $response;
    }

    public function deleteIndex(DeleteIndexRequest $request): DeleteIndexResponse
    {
        $response = new DeleteIndexResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->name) {
            return $response;
        }

        /** @var DeleteIndexResponse $response */
        $response = $this->doRequest(new DeleteIndexResponse(), 'delete', '/index', ['name' => $request->name]);

        return $response;
    }

    public function searchDocuments(SearchDocumentsRequest $request): SearchDocumentsResponse
    {
        $response = new SearchDocumentsResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->index || !$request->search || !$request->locale) {
            return $response;
        }

        $data = [
            'index'  => $request->index,
            'search' => $request->search,
            'locale' => $request->locale,
            'from'   => $request->from,
            'size'   => $request->size,
        ];

        /** @var SearchDocumentsResponse $response */
        $response = $this->doRequest(new SearchDocumentsResponse(), 'get', '/documents', $data);

        $array = $this->fetchKeyFromContent($response->_content, 'documents');

        $array = is_array($array) ? $array : [];

        $response->documents = $array;

        return $response;
    }

    public function addDocument(AddDocumentRequest $request): AddDocumentResponse
    {
        $response = new AddDocumentResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->index || !$request->code || !$request->text || !$request->locale) {
            return $response;
        }

        $data = [
            'index'  => $request->index,
            'code'   => $request->code,
            'title'  => $request->title,
            'text'   => $request->text,
            'locale' => $request->locale,
        ];

        /** @var AddDocumentResponse $response */
        $response = $this->doRequest(new AddDocumentResponse(), 'post', '/document', $data);

        return $response;
    }

    public function addDocuments(AddDocumentsRequest $request): AddDocumentsResponse
    {
        $response = new AddDocumentsResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->index) {
            return $response;
        }

        $data = [
            'index'     => $request->index,
            'documents' => $request->documents,
        ];

        /** @var AddDocumentsResponse $response */
        $response = $this->doRequest(new AddDocumentsResponse(), 'post', '/documents', $data);

        return $response;
    }

    public function deleteDocument(DeleteDocumentRequest $request): DeleteDocumentResponse
    {
        $response = new DeleteDocumentResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->index || !$request->code) {
            return $response;
        }

        $data = [
            'index' => $request->index,
            'code'  => $request->code,
        ];

        if ($request->locale) {
            $data['locale'] = $request->locale;
        }

        /** @var DeleteDocumentResponse $response */
        $response = $this->doRequest(new DeleteDocumentResponse(), 'delete', '/document', $data);

        return $response;
    }
}
