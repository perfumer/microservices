<?php

namespace Generated\Perfumer\Microservices\Feed;

abstract class Feed extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Feed\Feed
{
    public function getRecord(\Perfumer\Microservices\Feed\Request\Record\GetRecordRequest $request): \Perfumer\Microservices\Feed\Response\Record\GetRecordResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Record\GetRecordResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Record\GetRecordResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'record');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->record = $item;
        }

        return $response;
    }

    public function createRecord(\Perfumer\Microservices\Feed\Request\Record\CreateRecordRequest $request): \Perfumer\Microservices\Feed\Response\Record\CreateRecordResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Record\CreateRecordResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Record\CreateRecordResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'record');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->record = $item;
        }

        return $response;
    }

    public function deleteRecord(\Perfumer\Microservices\Feed\Request\Record\DeleteRecordRequest $request): \Perfumer\Microservices\Feed\Response\Record\DeleteRecordResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Record\DeleteRecordResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Record\DeleteRecordResponse());

        return $response;
    }

    public function getRecords(\Perfumer\Microservices\Feed\Request\Records\GetRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\GetRecordsResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Records\GetRecordsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Records\GetRecordsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'records');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->records = $item;
        }

        return $response;
    }

    public function createRecords(\Perfumer\Microservices\Feed\Request\Records\CreateRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\CreateRecordsResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Records\CreateRecordsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Records\CreateRecordsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'records');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->records = $item;
        }

        return $response;
    }

    public function deleteRecords(\Perfumer\Microservices\Feed\Request\Records\DeleteRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\DeleteRecordsResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Records\DeleteRecordsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Records\DeleteRecordsResponse());

        return $response;
    }

    public function updateRecords(\Perfumer\Microservices\Feed\Request\Records\UpdateRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\UpdateRecordsResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Records\UpdateRecordsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Records\UpdateRecordsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'records');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->records = $item;
        }

        return $response;
    }

    public function readRecord(\Perfumer\Microservices\Feed\Request\Record\ReadRecordRequest $request): \Perfumer\Microservices\Feed\Response\Record\ReadRecordResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Record\ReadRecordResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Record\ReadRecordResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'record');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->record = $item;
        }

        return $response;
    }

    public function unreadRecord(\Perfumer\Microservices\Feed\Request\Record\UnreadRecordRequest $request): \Perfumer\Microservices\Feed\Response\Record\UnreadRecordResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Record\UnreadRecordResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Record\UnreadRecordResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'record');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->record = $item;
        }

        return $response;
    }

    public function readRecords(\Perfumer\Microservices\Feed\Request\Records\ReadRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\ReadRecordsResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Records\ReadRecordsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Records\ReadRecordsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'records');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->records = $item;
        }

        return $response;
    }

    public function countRecords(\Perfumer\Microservices\Feed\Request\Records\CountRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\CountRecordsResponse
    {
        /** @var \Perfumer\Microservices\Feed\Response\Records\CountRecordsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Feed\Response\Records\CountRecordsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'records');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->records = $item;
        }

        return $response;
    }
}
