<?php

namespace Perfumer\Microservices\Contract\Pages;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveMeshModel;
use Perfumer\Microservices\Annotation\UpdateModel;
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

/**
 * @GetModel(microservice="pages", model="module", fields={"id", "code"})
 * @GetMeshModels(microservice="pages", model="modules", fields={"name", "code"})
 * @SaveMeshModel(microservice="pages", model="module", fields={"id", "code", "name", "description"})
 * @DeleteModel(microservice="pages", model="module", fields={"id", "code"})
 *
 * @DeleteModel(microservice="pages", model="revision", fields={"id"})
 *
 * @GetModel(microservice="pages", model="page", fields={"id"})
 * @CreateModel(microservice="pages", model="page", fields={"name", "address", "description", "module_id", "module_code"})
 * @UpdateModel(microservice="pages", model="page", fields={"id", "name", "address", "description", "module_id", "module_code"})
 * @DeleteModel(microservice="pages", model="page", fields={"id"})
 * @GetModels(microservice="pages", model="pages", fields={"name", "address", "module_id", "module_code"})
 */
interface Pages
{
    public function savePageEnv(SavePageEnvRequest $request): SavePageEnvResponse;

    public function getRevision(GetRevisionRequest $request): GetRevisionResponse;

    public function getRevisions(GetRevisionsRequest $request): GetRevisionsResponse;

    public function saveRevision(SaveRevisionRequest $request): SaveRevisionResponse;

    public function copyRevision(CopyRevisionRequest $request): CopyRevisionResponse;

    public function getComponents(GetComponentsRequest $request): GetComponentsResponse;

    public function getCommonParameters(GetCommonParametersRequest $request): GetCommonParametersResponse;

    public function getSchemaParameters(GetSchemaParametersRequest $request): GetSchemaParametersResponse;

    public function getConnectors(GetConnectorsRequest $request): GetConnectorsResponse;
}
