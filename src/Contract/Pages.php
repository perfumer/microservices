<?php

namespace Perfumer\Microservices\Contract;

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

interface Pages
{
    public function getModule(GetModuleRequest $request): GetModuleResponse;

    public function getModules(GetModulesRequest $request): GetModulesResponse;

    public function saveModule(SaveModuleRequest $request): SaveModuleResponse;

    public function getPage(GetPageRequest $request): GetPageResponse;

    public function getPages(GetPagesRequest $request): GetPagesResponse;

    public function savePage(SavePageRequest $request): SavePageResponse;

    public function savePageEnv(SavePageEnvRequest $request): SavePageEnvResponse;

    public function getRevision(GetRevisionRequest $request): GetRevisionResponse;

    public function getRevisions(GetRevisionsRequest $request): GetRevisionsResponse;

    public function saveRevision(SaveRevisionRequest $request): SaveRevisionResponse;

    public function getComponents(GetComponentsRequest $request): GetComponentsResponse;

    public function getCommonParameters(GetCommonParametersRequest $request): GetCommonParametersResponse;

    public function getSchemaParameters(GetSchemaParametersRequest $request): GetSchemaParametersResponse;

    public function getConnectors(GetConnectorsRequest $request): GetConnectorsResponse;
}
