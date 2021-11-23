## What is it

This is library to request Perfumerlabs microservices. Currently following microservices are supported:

- [Box](https://github.com/perfumerlabs/box)
- [Delivery](https://github.com/perfumerlabs/delivery)
- [Email](https://github.com/perfumerlabs/email)
- [ES](https://github.com/perfumerlabs/es)
- [Feed](https://github.com/perfumerlabs/feed)
- [OTP](https://github.com/perfumerlabs/otp)
- [Ncanode](https://github.com/perfumerlabs/ncanode)

All classes are autogenerated based on annotations.

### Fast example

```php
use Perfumer\Microservices\Forms\Forms;
use Perfumer\Microservices\Forms\Request\Modules\GetModulesRequest;

/** @var Forms $service */
$service = $container->get('microservices.forms');

$request = new GetModulesRequest();

$response = $service->getModules($request);

var_dump($response->modules);
```

### HTTP transactions

Library supports HTTP transactions.
Mechanism is very simple.
You connect storage provider.
Then write transaction, and after `commit` method all http-requests in transaction are stored to that storage.

If a request is failed, then its data is persisted in the storage.
Then you can retry requests in the daemon or cron job.

Transaction example:

```php
use Perfumer\Microservices\Transaction\Transaction;
use Perfumer\Microservices\Transaction\TransactionProvider\PropelProvider;
use Perfumer\Microservices\Forms\Request\Module\CreateModuleRequest;

/** @var Forms $service */
$service = $container->get('microservices.forms');

// You can add your own providers
// Currently only PropelProvider is here
$transaction = new Transaction(new PropelProvider());

$request1       = new CreateModuleRequest();
$request1->name = 'foo';

$transaction->add(
    $service,
    $request1,
    function (Forms $service, $request1) {
        return $sed->createModule($request1);
    }
);

$request2       = new CreateModuleRequest();
$request2->name = 'bar';

$transaction->add(
    $service,
    $request2,
    function (Forms $service, $request2) {
        return $sed->createModule($request2);
    }
);

$transaction->commit();
```

Example of daemon worker to resend requests we use:

```php
while (true) {
    $transaction_service = new Transaction(new PropelProvider());

    $transaction_request = TransactionRequestQuery::create()
        ->filterByUpdatedAt((new \DateTime())->modify('-1 minute'), Criteria::LESS_EQUAL)
        ->orderByUpdatedAt()
        ->findOne();

    if ($transaction_request) {
        $http_request = new HttpRequest();
        $http_request->url = $transaction_request->getUrl();
        $http_request->method = $transaction_request->getMethod();
        $http_request->timeout = $transaction_request->getTimeout();
        $http_request->json = $transaction_request->getJson();
        $http_request->headers = $transaction_request->getHeaders();

        try {
            $response = $transaction_service->sendHttpRequest($http_request);

            if (in_array($response->getStatusCode(), [200, 201])) {
                $transaction_request->delete();
            }
        } catch (\Throwable $e) {

        }

        if (!$transaction_request->isDeleted()) {
            $transaction_request->setUpdatedAt(new \DateTime());
            $transaction_request->save();
        }
    } else {
        sleep(5);
    }
}
```

### Request catching

Library supports also any request catching servers.
It is helpful to debug sent requests.

Any microservice class allows `request_catcher_host` parameter in constructor options.
If it is defined, and `_catch=true` provided to Request class, then microservice class also sends special request to that host.

```php
use Perfumer\Microservices\Microservice;
use Perfumer\Microservices\Request;

$request = new Request();
$request->_request_method = 'post';
$request->_request_url = '/my-url';
$request->_catch = true;
$request->setBody(['foo' => 'bar']);

$microservice = new Microservice([
    'host' => 'https://example.com',
    'request_catcher_host' => 'https://request-catcher-server.com'
]);

// HTTP request details as-is are sent to `https://request-catcher-server.com` also
$microservice->request($request);
```

### How to write annotations for HTTP methods

Say, we have a Crm service and want to generate annotation for `GET /user` request.
We open `src/Contract/Crm.php` and add class annotation like this:

```php
@RequestModel(microservice="crm", model="user", action="get", submodel="User", url="/user", fields={"id"}, response_fields={"user"}, request_method="get")
```

To execute generation launch `php generate.php`. This annotation after generation creates a number of things:

1. Base request class at `generated/src/Crm/Request/User/GetUserRequest.php`
1. Empty request class at `src/Crm/Request/User/GetUserRequest.php`
1. Base response class at `generated/src/Crm/Response/User/GetUserResponse.php`
1. Empty response class at `src/Crm/Response/User/GetUserResponse.php`
1. Base class at `generated/src/Crm/Crm.php` and/or method `getUser` in the class
1. Empty class at `src/Crm/Crm.php` if this is missing.

As you notice, request class path is generated by the next scheme:

```
src/{{microservice}}/Request/{{model}}/{{action}}{{submodule}}Request.php
```

Same as Response class:

```
src/{{microservice}}/Response/{{model}}/{{action}}{{submodule}}Response.php
```

Where `microservice`, `model`, `action` and `submodule` are annotation properties.
Also there are parameters to set:

- `url` means which URL will be requested. By default equal to model value.
- `request_method` means HTTP-method to request with.
- `fields` - array of parameters to set to json body of the request.
- `response_fields` - array of parameters to get from response body.

For convenience, there a number of predefined annotations, which set some of parameters by themselves. For example:

```php
@GetModel(microservice="crm", model="user", fields={"id"})
```

is short equivalent of the full annotation above.

Contributing
============

Feel free to make any pull requests.