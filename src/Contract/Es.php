<?php

namespace Perfumer\Microservices\Contract;

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

interface Es
{
    public function createIndex(CreateIndexRequest $request): CreateIndexResponse;

    public function deleteIndex(DeleteIndexRequest $request): DeleteIndexResponse;

    public function searchDocuments(SearchDocumentsRequest $request): SearchDocumentsResponse;

    public function addDocument(AddDocumentRequest $request): AddDocumentResponse;

    public function addDocuments(AddDocumentsRequest $request): AddDocumentsResponse;

    public function deleteDocument(DeleteDocumentRequest $request): DeleteDocumentResponse;
}