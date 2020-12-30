<?php

namespace Perfumer\Microservices\Pages;

use Perfumer\Microservices\Pages\Request\CopyRevisionRequest;
use Perfumer\Microservices\Pages\Request\GetCommonParametersRequest;
use Perfumer\Microservices\Pages\Request\GetComponentsRequest;
use Perfumer\Microservices\Pages\Request\GetConnectorsRequest;
use Perfumer\Microservices\Pages\Request\GetRevisionRequest;
use Perfumer\Microservices\Pages\Request\GetRevisionsRequest;
use Perfumer\Microservices\Pages\Request\GetSchemaParametersRequest;
use Perfumer\Microservices\Pages\Request\SavePageEnvRequest;
use Perfumer\Microservices\Pages\Request\SaveRevisionRequest;
use Perfumer\Microservices\Pages\Response\CopyRevisionResponse;
use Perfumer\Microservices\Pages\Response\GetCommonParametersResponse;
use Perfumer\Microservices\Pages\Response\GetComponentsResponse;
use Perfumer\Microservices\Pages\Response\GetConnectorsResponse;
use Perfumer\Microservices\Pages\Response\GetRevisionResponse;
use Perfumer\Microservices\Pages\Response\GetRevisionsResponse;
use Perfumer\Microservices\Pages\Response\GetSchemaParametersResponse;
use Perfumer\Microservices\Pages\Response\SavePageEnvResponse;
use Perfumer\Microservices\Pages\Response\SaveRevisionResponse;

class Pages extends \Generated\Perfumer\Microservices\Pages\Pages
{
    public function __construct($host)
    {
        $this->host = $host;
    }

    public function getRevision(GetRevisionRequest $request): GetRevisionResponse
    {
        $url = '/revision';

        /** @var GetRevisionResponse $response */
        $response = $this->doRequest(new GetRevisionResponse(), 'get', $url, [
            'id' => $request->id,
        ]);

        $array = $this->fetchKeyFromContent($response->_content, 'revision');

        $response->revision = $array;

        return $response;
    }

    public function getRevisions(GetRevisionsRequest $request): GetRevisionsResponse
    {
        $url = '/page/revisions';

        /** @var GetRevisionsResponse $response */
        $response = $this->doRequest(new GetRevisionsResponse(), 'get', $url, [
            'page_id' => $request->page_id,
        ]);

        $array = $this->fetchKeyFromContent($response->_content, 'revisions');

        $response->revisions = $array;

        return $response;
    }

    public function saveRevision(SaveRevisionRequest $request): SaveRevisionResponse
    {
        $url = '/revision';

        /** @var SaveRevisionResponse $response */
        $response = $this->doRequest(new SaveRevisionResponse(), 'post', $url, [
            'id' => $request->id,
            'name' => $request->name,
            'description' => $request->description,
            'page_id' => $request->page_id,
            'blocks' => $request->blocks,
            'parameters' => $request->parameters,
        ]);

        $array = $this->fetchKeyFromContent($response->_content, 'revision');

        $response->revision = $array;

        return $response;
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

        /** @var GetComponentsResponse $response */
        $response = $this->doRequest(new GetComponentsResponse(), 'get', $url);

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
