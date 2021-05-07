<?php

namespace Perfumer\Microservices\Contract\Feed;

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

interface Feed
{
    public function createItem(CreateItemRequest $request): CreateItemResponse;

    public function getItem(GetItemRequest $request): GetItemResponse;

    public function updateItem(UpdateItemRequest $request): UpdateItemResponse;

    public function deleteItem(DeleteItemRequest $request): DeleteItemResponse;

    public function createItems(CreateItemsRequest $request): CreateItemsResponse;

    public function getItems(GetItemsRequest $request): GetItemsResponse;

    public function updateItems(UpdateItemsRequest $request): UpdateItemsResponse;

    public function deleteItems(DeleteItemsRequest $request): DeleteItemsResponse;

    public function setItemIsRead(SetItemIsReadRequest $request): SetItemIsReadResponse;

    public function setItemsIsRead(SetItemsIsReadRequest $request): SetItemsIsReadResponse;

    public function setItemIsUnread(SetItemIsUnreadRequest $request): SetItemIsUnreadResponse;

    public function getItemsCount(GetItemsCountRequest $request): GetItemsCountResponse;
}