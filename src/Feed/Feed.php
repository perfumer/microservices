<?php

namespace Perfumer\Microservices\Feed;

use Perfumer\Microservices\Feed\Request\CreateItemRequest;
use Perfumer\Microservices\Feed\Request\CreateItemsRequest;
use Perfumer\Microservices\Feed\Request\DeleteItemRequest;
use Perfumer\Microservices\Feed\Request\DeleteItemsRequest;
use Perfumer\Microservices\Feed\Request\GetItemRequest;
use Perfumer\Microservices\Feed\Request\GetItemsCountRequest;
use Perfumer\Microservices\Feed\Request\GetItemsRequest;
use Perfumer\Microservices\Feed\Request\SetItemIsReadRequest;
use Perfumer\Microservices\Feed\Request\SetItemIsUnreadRequest;
use Perfumer\Microservices\Feed\Request\SetItemsIsReadRequest;
use Perfumer\Microservices\Feed\Request\UpdateItemRequest;
use Perfumer\Microservices\Feed\Request\UpdateItemsRequest;
use Perfumer\Microservices\Feed\Response\CreateItemResponse;
use Perfumer\Microservices\Feed\Response\CreateItemsResponse;
use Perfumer\Microservices\Feed\Response\DeleteItemResponse;
use Perfumer\Microservices\Feed\Response\DeleteItemsResponse;
use Perfumer\Microservices\Feed\Response\GetItemResponse;
use Perfumer\Microservices\Feed\Response\GetItemsCountResponse;
use Perfumer\Microservices\Feed\Response\GetItemsResponse;
use Perfumer\Microservices\Feed\Response\SetItemIsReadResponse;
use Perfumer\Microservices\Feed\Response\SetItemIsUnreadResponse;
use Perfumer\Microservices\Feed\Response\SetItemsIsReadResponse;
use Perfumer\Microservices\Feed\Response\UpdateItemResponse;
use Perfumer\Microservices\Feed\Response\UpdateItemsResponse;

class Feed extends \Generated\Perfumer\Microservices\Feed\Feed
{
    protected bool $dummy;

    public function __construct(string $host, bool $dummy = false)
    {
        $this->host = $host;

        $this->dummy = $dummy;
    }

    public function createItem(CreateItemRequest $request): CreateItemResponse
    {
        $response = new CreateItemResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->collection || !$request->recipient) {
            return $response;
        }

        /** @var CreateItemResponse $response */
        $response = $this->doRequest(new CreateItemResponse(), 'post', '/record', [
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
        ]);

        return $response;
    }

    public function deleteItem(DeleteItemRequest $request): DeleteItemResponse
    {
        $response = new DeleteItemResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->collection || (!$request->id && !$request->recipient && !$request->sender)) {
            return $response;
        }

        /** @var DeleteItemResponse $response */
        $response = $this->doRequest(new DeleteItemResponse(), 'delete', '/record', [
            'collection' => $request->collection,
            'badge_user' => $request->badge_user,
            'recipient' => $request->recipient,
            'sender' => $request->sender,
            'id' => $request->id,
        ]);

        return $response;
    }

    public function getItem(GetItemRequest $request): GetItemResponse
    {
        $response = new GetItemResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->collection || !$request->id) {
            return $response;
        }

        /** @var GetItemResponse $response */
        $response = $this->doRequest(new GetItemResponse(), 'get', '/record', [
            'collection' => $request->collection,
            'badge_user' => $request->badge_user,
            'recipient' => $request->recipient,
            'sender' => $request->sender,
            'id' => $request->id,
        ]);

        $response->record = $response->_content['record'] ?? null;

        if ($response->record && $response->record['payload'] ?? null) {
            $response->record['payload'] = json_decode($response->record['payload'], true);
        }

        return $response;
    }

    //TODO Edit
    public function updateItem(UpdateItemRequest $request): UpdateItemResponse
    {
        $response = new UpdateItemResponse();

        if ($this->dummy) {
            return $response;
        }

        /** @var UpdateItemResponse $response */
        $response = $this->doRequest(new UpdateItemResponse(), 'post', '/record', [

        ]);

        return $response;
    }

    public function createItems(CreateItemsRequest $request): CreateItemsResponse
    {
        $response = new CreateItemsResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->collection || !$request->recipients || !$request->records) {
            return $response;
        }

        /** @var CreateItemsResponse $response */
        $response = $this->doRequest(new CreateItemsResponse(), 'post', '/records', [
            'collection' => $request->collection,
            'recipients' => $request->recipients,
            'records' => $request->records,
        ]);

        return $response;
    }

    public function deleteItems(DeleteItemsRequest $request): DeleteItemsResponse
    {
        $response = new DeleteItemsResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->collection || (!$request->recipient && !$request->sender && !$request->thread)) {
            return $response;
        }

        /** @var DeleteItemsResponse $response */
        $response = $this->doRequest(new DeleteItemsResponse(), 'delete', '/records', [
            'collection' => $request->collection,
            'badge_user' => $request->badge_user,
            'recipient' => $request->recipient,
            'sender' => $request->sender,
            'thread' => $request->thread,
        ]);

        return $response;
    }

    public function getItems(GetItemsRequest $request): GetItemsResponse
    {
        $response = new GetItemsResponse();

        if ($this->dummy) {
            return $response;
        }

        if ($request->collection) {
            return $response;
        }

        /** @var GetItemsResponse $response */
        $response = $this->doRequest(new GetItemsResponse(), 'get', '/records', [
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
        ]);

        return $response;
    }

    public function updateItems(UpdateItemsRequest $request): UpdateItemsResponse
    {
        $response = new UpdateItemsResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->collection || !$request->where || !$request->set) {
            return $response;
        }

        /** @var UpdateItemsResponse $response */
        $response = $this->doRequest(new UpdateItemsResponse(), 'patch', '/records', [
            'collection' => $request->collection,
            'where' => $request->where,
            'set' => $request->set,
        ]);

        return $response;
    }

    public function getItemsCount(GetItemsCountRequest $request): GetItemsCountResponse
    {
        $response = new GetItemsCountResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->collection || !$request->recipient) {
            return $response;
        }

        /** @var GetItemsCountResponse $response */
        $response = $this->doRequest(new GetItemsCountResponse(), 'get', '/records/count', [
            'collection' => $request->collection,
            'recipient' => $request->recipient,
            'where' => $request->where,
            'group' => $request->group,
        ]);

        return $response;
    }

    public function setItemIsRead(SetItemIsReadRequest $request): SetItemIsReadResponse
    {
        $response = new SetItemIsReadResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->collection || (!$request->id && !$request->recipient && !$request->sender)) {
            return $response;
        }

        /** @var SetItemIsReadResponse $response */
        $response = $this->doRequest(new SetItemIsReadResponse(), 'post', '/records/read', [
            'collection' => $request->collection,
            'id' => $request->id,
            'recipient' => $request->recipient,
            'sender' => $request->sender,
            'badge_user' => $request->badge_user,
        ]);

        return $response;
    }

    public function setItemIsUnread(SetItemIsUnreadRequest $request): SetItemIsUnreadResponse
    {
        $response = new SetItemIsUnreadResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->collection || !$request->id) {
            return $response;
        }

        /** @var SetItemIsUnreadResponse $response */
        $response = $this->doRequest(new SetItemIsUnreadResponse(), 'post', '/record/unread', [
            'collection' => $request->collection,
            'id' => $request->id,
            'badge_user' => $request->badge_user,
        ]);

        return $response;
    }

    public function setItemsIsRead(SetItemsIsReadRequest $request): SetItemsIsReadResponse
    {
        $response = new SetItemsIsReadResponse();

        if ($this->dummy) {
            return $response;
        }

        if (!$request->collection || !$request->recipient) {
            return $response;
        }

        /** @var SetItemsIsReadResponse $response */
        $response = $this->doRequest(new SetItemsIsReadResponse(), 'post', '/record/read', [
            'collection' => $request->collection,
            'recipient' => $request->recipient,
            'badge_user' => $request->badge_user,
        ]);

        return $response;
    }

}