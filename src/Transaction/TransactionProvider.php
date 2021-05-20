<?php

namespace Perfumer\Microservices\Transaction;

interface TransactionProvider
{
    /**
     * @param HttpRequest[] $http_requests
     */
    public function saveHttpRequests(array $http_requests): void;

    /**
     * @param HttpRequest $http_request
     */
    public function deleteHttpRequest(HttpRequest $http_request): void;
}
