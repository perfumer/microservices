<?php

namespace Generated\Perfumer\Microservices\Feed;

abstract class Feed extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Feed\Feed
{
    public function getRecord(\Perfumer\Microservices\Feed\Request\Record\GetRecordRequest $request): \Perfumer\Microservices\Feed\Response\Record\GetRecordResponse
    {
        $url = '/record';

        /** @var \Perfumer\Microservices\Feed\Response\Record\GetRecordResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Record\GetRecordResponse(), 'get', $url, [
        'collection' => $request->collection,
        'badge_user' => $request->badge_user,
        'recipient' => $request->recipient,
        'sender' => $request->sender,
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'record');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->record = $item;
        }

        return $response;
    }

    public function createRecord(\Perfumer\Microservices\Feed\Request\Record\CreateRecordRequest $request): \Perfumer\Microservices\Feed\Response\Record\CreateRecordResponse
    {
        $url = '/record';

        /** @var \Perfumer\Microservices\Feed\Response\Record\CreateRecordResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Record\CreateRecordResponse(), 'post', $url, [
        'collection' => $request->collection,
        'recipient' => $request->recipient,
        'websocket_channel' => $request->websocket_channel,
        'badge_user' => $request->badge_user,
        'sender' => $request->sender,
        'thread' => $request->thread,
        'title' => $request->title,
        'text' => $request->text,
        'image' => $request->image,
        'created_at' => $request->created_at,
        'payload' => $request->payload,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'record');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->record = $item;
        }

        return $response;
    }

    public function deleteRecord(\Perfumer\Microservices\Feed\Request\Record\DeleteRecordRequest $request): \Perfumer\Microservices\Feed\Response\Record\DeleteRecordResponse
    {
        $url = '/record';

        /** @var \Perfumer\Microservices\Feed\Response\Record\DeleteRecordResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Record\DeleteRecordResponse(), 'delete', $url, [
        'collection' => $request->collection,
        'badge_user' => $request->badge_user,
        'recipient' => $request->recipient,
        'sender' => $request->sender,
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function getRecords(\Perfumer\Microservices\Feed\Request\Records\GetRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\GetRecordsResponse
    {
        $url = '/records';

        /** @var \Perfumer\Microservices\Feed\Response\Records\GetRecordsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Records\GetRecordsResponse(), 'get', $url, [
        'collection' => $request->collection,
        'sender' => $request->sender,
        'user' => $request->user,
        'thread' => $request->thread,
        'recipient' => $request->recipient,
        'search' => $request->search,
        'id' => $request->id,
        'order' => $request->order,
        'is_read' => $request->is_read,
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
        $item = $this->fetchKeyFromContent($response->_content, 'records');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->records = $item;
        }

        return $response;
    }

    public function createRecords(\Perfumer\Microservices\Feed\Request\Records\CreateRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\CreateRecordsResponse
    {
        $url = '/records';

        /** @var \Perfumer\Microservices\Feed\Response\Records\CreateRecordsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Records\CreateRecordsResponse(), 'post', $url, [
        'collection' => $request->collection,
        'recipients' => $request->recipients,
        'records' => $request->records,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'records');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->records = $item;
        }

        return $response;
    }

    public function deleteRecords(\Perfumer\Microservices\Feed\Request\Records\DeleteRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\DeleteRecordsResponse
    {
        $url = '/records';

        /** @var \Perfumer\Microservices\Feed\Response\Records\DeleteRecordsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Records\DeleteRecordsResponse(), 'delete', $url, [
        'collection' => $request->collection,
        'badge_user' => $request->badge_user,
        'recipient' => $request->recipient,
        'sender' => $request->sender,
        'thread' => $request->thread,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function updateRecords(\Perfumer\Microservices\Feed\Request\Records\UpdateRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\UpdateRecordsResponse
    {
        $url = '/records';

        /** @var \Perfumer\Microservices\Feed\Response\Records\UpdateRecordsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Records\UpdateRecordsResponse(), 'patch', $url, [
        'collection' => $request->collection,
        'where' => $request->where,
        'set' => $request->set,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'records');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->records = $item;
        }

        return $response;
    }

    public function readRecord(\Perfumer\Microservices\Feed\Request\Record\ReadRecordRequest $request): \Perfumer\Microservices\Feed\Response\Record\ReadRecordResponse
    {
        $url = '/record/read';

        /** @var \Perfumer\Microservices\Feed\Response\Record\ReadRecordResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Record\ReadRecordResponse(), 'post', $url, [
        'collection' => $request->collection,
        'id' => $request->id,
        'recipient' => $request->recipient,
        'sender' => $request->sender,
        'badge_user' => $request->badge_user,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'record');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->record = $item;
        }

        return $response;
    }

    public function unreadRecord(\Perfumer\Microservices\Feed\Request\Record\UnreadRecordRequest $request): \Perfumer\Microservices\Feed\Response\Record\UnreadRecordResponse
    {
        $url = '/record/unread';

        /** @var \Perfumer\Microservices\Feed\Response\Record\UnreadRecordResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Record\UnreadRecordResponse(), 'post', $url, [
        'collection' => $request->collection,
        'id' => $request->id,
        'badge_user' => $request->badge_user,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'record');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->record = $item;
        }

        return $response;
    }

    public function readRecords(\Perfumer\Microservices\Feed\Request\Records\ReadRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\ReadRecordsResponse
    {
        $url = '/records/read';

        /** @var \Perfumer\Microservices\Feed\Response\Records\ReadRecordsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Records\ReadRecordsResponse(), 'post', $url, [
        'collection' => $request->collection,
        'recipient' => $request->recipient,
        'badge_user' => $request->badge_user,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'records');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->records = $item;
        }

        return $response;
    }

    public function countRecords(\Perfumer\Microservices\Feed\Request\Records\CountRecordsRequest $request): \Perfumer\Microservices\Feed\Response\Records\CountRecordsResponse
    {
        $url = '/records/count';

        /** @var \Perfumer\Microservices\Feed\Response\Records\CountRecordsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Records\CountRecordsResponse(), 'get', $url, [
        'collection' => $request->collection,
        'recipient' => $request->recipient,
        'where' => $request->where,
        'group' => $request->group,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'records');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->records = $item;
        }

        return $response;
    }
}
