<?php

namespace Perfumer\Microservices\Pages;

use Perfumer\Microservices\Pages\Request\CopyRevisionRequest;
use Perfumer\Microservices\Pages\Request\GetCommonParametersRequest;
use Perfumer\Microservices\Pages\Request\GetSchemaParametersRequest;
use Perfumer\Microservices\Pages\Response\CopyRevisionResponse;
use Perfumer\Microservices\Pages\Response\GetCommonParametersResponse;
use Perfumer\Microservices\Pages\Response\GetSchemaParametersResponse;

class Pages extends \Generated\Perfumer\Microservices\Pages\Pages
{
    /**
     * @var string
     */
    private $segment;

    /**
     * @deprecated
     * @return string|null
     */
    public function getSegment(): ?string
    {
        return $this->segment ?: $this->_tenant;
    }

    /**
     * @deprecated
     * @param string $segment
     */
    public function setSegment(string $segment): void
    {
        $this->segment = $segment;

        $this->addHeader('Api-Segment', $segment);
        $this->addHeader('Api-Tenant', $segment);
    }

    public function copyRevision(CopyRevisionRequest $request): CopyRevisionResponse
    {
        $url = '/revision/copy';

        $request->_request_method = 'post';
        $request->_request_url = $url;

        /** @var CopyRevisionResponse $response */
        $response = $this->doRequest($request, new CopyRevisionResponse());

        $array = $this->fetchKeyFromContent($response->_content, 'revision');

        $response->revision = $array;

        return $response;
    }

    public function getCommonParameters(GetCommonParametersRequest $request): GetCommonParametersResponse
    {
        $url = '/component/parameters/common';

        $request->_request_method = 'get';
        $request->_request_url = $url;

        /** @var GetCommonParametersResponse $response */
        $response = $this->doRequest($request, new GetCommonParametersResponse());

        $array = $this->fetchKeyFromContent($response->_content, 'parameters');

        $response->parameters = $array;

        return $response;
    }

    public function getSchemaParameters(GetSchemaParametersRequest $request): GetSchemaParametersResponse
    {
        $url = '/schema/parameters';

        $request->_request_method = 'get';
        $request->_request_url = $url;

        /** @var GetSchemaParametersResponse $response */
        $response = $this->doRequest($request, new GetSchemaParametersResponse());

        $array = $this->fetchKeyFromContent($response->_content, 'parameters');

        $response->parameters = $array;

        return $response;
    }
}
