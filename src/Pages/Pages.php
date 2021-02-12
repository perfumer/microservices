<?php

namespace Perfumer\Microservices\Pages;

use Perfumer\Microservices\Pages\Request\CopyRevisionRequest;
use Perfumer\Microservices\Pages\Request\GetCommonParametersRequest;
use Perfumer\Microservices\Pages\Request\GetComponentsRequest;
use Perfumer\Microservices\Pages\Request\GetConnectorsRequest;
use Perfumer\Microservices\Pages\Request\GetSchemaParametersRequest;
use Perfumer\Microservices\Pages\Request\SavePageEnvRequest;
use Perfumer\Microservices\Pages\Response\CopyRevisionResponse;
use Perfumer\Microservices\Pages\Response\GetCommonParametersResponse;
use Perfumer\Microservices\Pages\Response\GetComponentsResponse;
use Perfumer\Microservices\Pages\Response\GetConnectorsResponse;
use Perfumer\Microservices\Pages\Response\GetSchemaParametersResponse;
use Perfumer\Microservices\Pages\Response\SavePageEnvResponse;

class Pages extends \Generated\Perfumer\Microservices\Pages\Pages
{
    public function __construct($host)
    {
        $this->host = $host;
    }

    public function copyRevision(CopyRevisionRequest $request): CopyRevisionResponse
    {
        $url = '/revision/copy';

        /** @var CopyRevisionResponse $response */
        $response = $this->doRequest(new CopyRevisionResponse(), 'post', $url, [
            'id' => $request->id,
        ]);

        $array = $this->fetchKeyFromContent($response->_content, 'revision');

        $response->revision = $array;

        return $response;
    }

    public function getComponents(GetComponentsRequest $request): GetComponentsResponse
    {
        $url = '/components';
        $json = null;

        if ($request->category_id) {
            $json = [
                'category_id' => $request->category_id
            ];
        }

        /** @var GetComponentsResponse $response */
        $response = $this->doRequest(new GetComponentsResponse(), 'get', $url, $json);

        $array = $this->fetchKeyFromContent($response->_content, 'components');

        $response->components = $array;

        return $response;
    }

    public function getCommonParameters(GetCommonParametersRequest $request): GetCommonParametersResponse
    {
        $url = '/component/parameters/common';

        /** @var GetCommonParametersResponse $response */
        $response = $this->doRequest(new GetCommonParametersResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->_content, 'parameters');

        $response->parameters = $array;

        return $response;
    }

    public function getSchemaParameters(GetSchemaParametersRequest $request): GetSchemaParametersResponse
    {
        $url = '/schema/parameters';

        /** @var GetSchemaParametersResponse $response */
        $response = $this->doRequest(new GetSchemaParametersResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->_content, 'parameters');

        $response->parameters = $array;

        return $response;
    }

    public function getConnectors(GetConnectorsRequest $request): GetConnectorsResponse
    {
        $url = '/connectors';

        if ($request->type) {
            $url .= '/' . $request->type;
        }

        /** @var GetConnectorsResponse $response */
        $response = $this->doRequest(new GetConnectorsResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->_content, 'connectors');

        $response->connectors = $array;

        return $response;
    }

    public function savePageEnv(SavePageEnvRequest $request): SavePageEnvResponse
    {
        $url = sprintf('/page/revision/%s', $request->env);

        /** @var SavePageEnvResponse $response */
        $response = $this->doRequest(new SavePageEnvResponse(), 'post', $url, [
            'page_id' => (int) $request->page_id,
            'revision_id' => (int) $request->revision_id,
        ]);

        return $response;
    }
}
