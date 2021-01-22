<?php

namespace Perfumer\Microservices\Crm;

use Perfumer\Microservices\Crm\Request\Customer\GetCustomerCredentialsRequest;
use Perfumer\Microservices\Crm\Response\Customer\GetCustomerCredentialsResponse;

class Crm extends \Generated\Perfumer\Microservices\Crm\Crm
{
    public function __construct($host)
    {
        $this->host = $host;
    }

    public function getCustomerCredentials(GetCustomerCredentialsRequest $request): GetCustomerCredentialsResponse
    {
        $url = '/customer/credentials';

        /** @var GetCustomerCredentialsResponse $response */
        $response = $this->doRequest(new GetCustomerCredentialsResponse(), 'get', $url, [
            'iin' => $request->iin,
            'password' => $request->password
        ]);

        $is_valid = (bool) $this->fetchKeyFromContent($response->_content, 'is_valid');

        $response->is_valid = $is_valid;

        return $response;
    }
}
