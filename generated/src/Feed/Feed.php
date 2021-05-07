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
        'limit' => $request->limit,
        'offset' => $request->offset,
        'order' => $request->order,
        'is_read' => $request->is_read,
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

    public function setIsRead(\Perfumer\Microservices\Feed\Request\Record\SetIsReadRequest $request): \Perfumer\Microservices\Feed\Response\Record\SetIsReadResponse
    {
        $url = '/record/read';

        /** @var \Perfumer\Microservices\Feed\Response\Record\SetIsReadResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Record\SetIsReadResponse(), 'post', $url, [
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

    public function setIsUnread(\Perfumer\Microservices\Feed\Request\Record\SetIsUnreadRequest $request): \Perfumer\Microservices\Feed\Response\Record\SetIsUnreadResponse
    {
        $url = '/record/unread';

        /** @var \Perfumer\Microservices\Feed\Response\Record\SetIsUnreadResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Record\SetIsUnreadResponse(), 'post', $url, [
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

    public function setIsReadAll(\Perfumer\Microservices\Feed\Request\Records\SetIsReadAllRequest $request): \Perfumer\Microservices\Feed\Response\Records\SetIsReadAllResponse
    {
        $url = '/records/read';

        /** @var \Perfumer\Microservices\Feed\Response\Records\SetIsReadAllResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Records\SetIsReadAllResponse(), 'post', $url, [
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

    public function getCount(\Perfumer\Microservices\Feed\Request\Records\GetCountRequest $request): \Perfumer\Microservices\Feed\Response\Records\GetCountResponse
    {
        $url = '/records/count';

        /** @var \Perfumer\Microservices\Feed\Response\Records\GetCountResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Feed\Response\Records\GetCountResponse(), 'get', $url, [
        'collection' => $request->collection,
        'recipient' => $request->recipient,
        'where' => $request->where,
        'group' => $request->group,
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
}
