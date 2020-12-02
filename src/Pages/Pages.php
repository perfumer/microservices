<?php

namespace Perfumer\Microservices\Pages;

use Perfumer\Microservices\Microservice;
use Perfumer\Microservices\Pages\Request\DeleteModuleRequest;
use Perfumer\Microservices\Pages\Request\GetCommonParametersRequest;
use Perfumer\Microservices\Pages\Request\GetComponentsRequest;
use Perfumer\Microservices\Pages\Request\GetConnectorsRequest;
use Perfumer\Microservices\Pages\Request\GetModuleRequest;
use Perfumer\Microservices\Pages\Request\GetModulesRequest;
use Perfumer\Microservices\Pages\Request\GetPageRequest;
use Perfumer\Microservices\Pages\Request\GetPagesRequest;
use Perfumer\Microservices\Pages\Request\GetRevisionRequest;
use Perfumer\Microservices\Pages\Request\GetRevisionsRequest;
use Perfumer\Microservices\Pages\Request\GetSchemaParametersRequest;
use Perfumer\Microservices\Pages\Request\SaveModuleRequest;
use Perfumer\Microservices\Pages\Request\SavePageEnvRequest;
use Perfumer\Microservices\Pages\Request\SavePageRequest;
use Perfumer\Microservices\Pages\Request\SaveRevisionRequest;
use Perfumer\Microservices\Pages\Response\DeleteModuleResponse;
use Perfumer\Microservices\Pages\Response\GetCommonParametersResponse;
use Perfumer\Microservices\Pages\Response\GetComponentsResponse;
use Perfumer\Microservices\Pages\Response\GetConnectorsResponse;
use Perfumer\Microservices\Pages\Response\GetModuleResponse;
use Perfumer\Microservices\Pages\Response\GetModulesResponse;
use Perfumer\Microservices\Pages\Response\GetPageResponse;
use Perfumer\Microservices\Pages\Response\GetPagesResponse;
use Perfumer\Microservices\Pages\Response\GetRevisionResponse;
use Perfumer\Microservices\Pages\Response\GetRevisionsResponse;
use Perfumer\Microservices\Pages\Response\GetSchemaParametersResponse;
use Perfumer\Microservices\Pages\Response\SaveModuleResponse;
use Perfumer\Microservices\Pages\Response\SavePageEnvResponse;
use Perfumer\Microservices\Pages\Response\SavePageResponse;
use Perfumer\Microservices\Pages\Response\SaveRevisionResponse;

class Pages extends Microservice implements \Perfumer\Microservices\Contract\Pages
{
    public function __construct($host)
    {
        $this->host = $host;
    }

    public function getModule(GetModuleRequest $request): GetModuleResponse
    {
        $url = '/module';

        /** @var GetModuleResponse $response */
        $response = $this->doRequest(new GetModuleResponse(), 'get', $url, [
            'code' => $request->code,
        ]);

        $array = $this->fetchKeyFromContent($response->content, 'module');

        $response->module = $array;

        return $response;
    }

    public function getModules(GetModulesRequest $request): GetModulesResponse
    {
        $url = '/modules';

        /** @var GetModulesResponse $response */
        $response = $this->doRequest(new GetModulesResponse(), 'get', $url, [
            'parent' => $request->parent,
            'child' => $request->child,
            'limit' => $request->limit,
            'offset' => $request->offset,
        ]);

        $array = $this->fetchKeyFromContent($response->content, 'modules');

        $response->modules = $array;

        return $response;
    }

    public function saveModule(SaveModuleRequest $request): SaveModuleResponse
    {
        $url = '/module';

        /** @var SaveModuleResponse $response */
        $response = $this->doRequest(new SaveModuleResponse(), 'post', $url, [
            'name' => $request->name,
            'code' => $request->code,
            'parents' => $request->parents,
            'children' => $request->children,
        ]);

        return $response;
    }

    public function deleteModule(DeleteModuleRequest $request): DeleteModuleResponse
    {
        $url = '/module';

        /** @var DeleteModuleResponse $response */
        $response = $this->doRequest(new DeleteModuleResponse(), 'delete', $url, [
            'code' => $request->code,
        ]);

        return $response;
    }

    public function getPage(GetPageRequest $request): GetPageResponse
    {
        $url = '/page/' . $request->id;

        /** @var GetPageResponse $response */
        $response = $this->doRequest(new GetPageResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->content, 'page');

        $response->page = $array;

        return $response;
    }

    public function getPages(GetPagesRequest $request): GetPagesResponse
    {
        $url = '/pages';

        /** @var GetPagesResponse $response */
        $response = $this->doRequest(new GetPagesResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->content, 'pages');

        $response->pages = $array;

        return $response;
    }

    public function savePage(SavePageRequest $request): SavePageResponse
    {
        $url = '/page';

        /** @var SavePageResponse $response */
        $response = $this->doRequest(new SavePageResponse(), 'post', $url, [
            'name' => $request->name,
            'address' => $request->address,
            'description' => $request->description,
            'stage_revision_id' => $request->stage_revision_id,
            'prod_revision_id' => $request->prod_revision_id,
        ]);

        return $response;
    }

    public function getRevision(GetRevisionRequest $request): GetRevisionResponse
    {
        $url = '/revision/' . $request->id;

        /** @var GetRevisionResponse $response */
        $response = $this->doRequest(new GetRevisionResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->content, 'revision');

        $response->revision = $array;

        return $response;
    }

    public function getRevisions(GetRevisionsRequest $request): GetRevisionsResponse
    {
        $url = '/page/' . $request->page_id . '/revisions';

        /** @var GetRevisionsResponse $response */
        $response = $this->doRequest(new GetRevisionsResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->content, 'revisions');

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

        $array = $this->fetchKeyFromContent($response->content, 'revision');

        $response->revision = $array;

        return $response;
    }

    public function getComponents(GetComponentsRequest $request): GetComponentsResponse
    {
        $url = '/components';

        /** @var GetComponentsResponse $response */
        $response = $this->doRequest(new GetComponentsResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->content, 'components');

        $response->components = $array;

        return $response;
    }

    public function getCommonParameters(GetCommonParametersRequest $request): GetCommonParametersResponse
    {
        $url = '/component/parameters/common';

        /** @var GetCommonParametersResponse $response */
        $response = $this->doRequest(new GetCommonParametersResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->content, 'parameters');

        $response->parameters = $array;

        return $response;
    }

    public function getSchemaParameters(GetSchemaParametersRequest $request): GetSchemaParametersResponse
    {
        $url = '/schema/parameters';

        /** @var GetSchemaParametersResponse $response */
        $response = $this->doRequest(new GetSchemaParametersResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->content, 'parameters');

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

        $array = $this->fetchKeyFromContent($response->content, 'connectors');

        $response->connectors = $array;

        return $response;
    }

    public function savePageEnv(SavePageEnvRequest $request): SavePageEnvResponse
    {
        $url = sprintf('/page/%d/revision/%d/%s', $request->page_id, $request->revision_id, $request->env);

        /** @var SavePageEnvResponse $response */
        $response = $this->doRequest(new SavePageEnvResponse(), 'post', $url, [
            'page_id' => (int) $request->page_id,
            'revision_id' => (int) $request->revision_id,
        ]);

        return $response;
    }
}
