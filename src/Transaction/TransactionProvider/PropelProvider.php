<?php

namespace Perfumer\Microservices\Transaction\TransactionProvider;

use App\Model\Transaction;
use App\Model\TransactionRequest;
use App\Model\TransactionRequestQuery;
use App\Model\Map\TransactionTableMap;
use Perfumer\Microservices\Transaction\HttpRequest;
use Perfumer\Microservices\Transaction\TransactionProvider;
use Propel\Runtime\Propel;

class PropelProvider implements TransactionProvider
{
    /**
     * @param HttpRequest[] $http_requests
     */
    public function saveHttpRequests(array $http_requests): void
    {
        $con = Propel::getConnection(TransactionTableMap::DATABASE_NAME);
        $con->beginTransaction();

        try {
            $transaction = new Transaction();
            $transaction->save();

            foreach ($http_requests as $http_request) {
                $transaction_request = new TransactionRequest();
                $transaction_request->setTransaction($transaction);
                $transaction_request->setTimeout($http_request->timeout);
                $transaction_request->setMethod($http_request->method);
                $transaction_request->setUrl($http_request->url);
                $transaction_request->setUuid($http_request->uuid);

                if ($http_request->headers) {
                    $transaction_request->setHeaders($http_request->headers);
                }

                if ($http_request->json) {
                    $transaction_request->setJson($http_request->json);
                }

                $transaction_request->save();
            }

            $con->commit();
        } catch (\Throwable $e) {
            $con->rollBack();

            throw $e;
        }
    }

    public function deleteHttpRequest(HttpRequest $http_request): void
    {
        TransactionRequestQuery::create()
            ->filterByUuid($http_request->uuid)
            ->delete();
    }
}
