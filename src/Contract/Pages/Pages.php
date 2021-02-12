<?php

namespace Perfumer\Microservices\Contract\Pages;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveMeshModel;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateModel;
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

/**
 * @GetModel(microservice="pages", model="site", fields={"id", "code"})
 * @GetModels(microservice="pages", model="sites", fields={"name", "code", "description"})
 *
 * @GetModel(microservice="pages", model="module", fields={"id", "code"})
 * @GetMeshModels(microservice="pages", model="modules", fields={"name", "code", "description", "is_archived.bool"})
 * @SaveMeshModel(microservice="pages", model="module", fields={"id", "code", "name", "description", "is_archived.bool"})
 * @DeleteModel(microservice="pages", model="module", fields={"id", "code"})
 * 
 * @SaveModel(microservice="pages", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="pages", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 *
 * @GetModel(microservice="pages", model="revision", fields={"id"})
 * @DeleteModel(microservice="pages", model="revision", fields={"id"})
 * @GetModels(microservice="pages", model="revisions", fields={"name", "description", "is_archived.bool", "page_id.int"})
 * @SaveModel(microservice="pages", model="revision", fields={"id.int", "page_id.int", "name", "description", "blocks.array", "parameters.array", "is_archived.bool"})
 *
 * @SaveModel(microservice="pages", model="revision", fields={"id.int"}, url="/revision/archive", action="archive")
 * @SaveModel(microservice="pages", model="revision", fields={"id.int"}, url="/revision/archive", action="unarchive", request_method="delete")
 *
 * @GetModel(microservice="pages", model="page", fields={"id"})
 * @CreateModel(microservice="pages", model="page", fields={"name", "address", "description", "module_id.int", "site_id.int", "module_code", "is_archived.bool"})
 * @UpdateModel(microservice="pages", model="page", fields={"id", "name", "address", "description", "module_id.int", "site_id.int", "module_code", "is_archived.bool"})
 * @DeleteModel(microservice="pages", model="page", fields={"id"})
 * @GetModels(microservice="pages", model="pages", fields={"name", "description", "is_archived.bool", "address", "module_id.int", "site_id.int", "module_code"})
 * @GetModel(microservice="pages", model="revision", url="page/revision/stage", action="getPageStage", fields={"page_id.int", "address", "site"})
 * @GetModel(microservice="pages", model="revision", url="page/revision/prod", action="getPageProd", fields={"page_id.int", "address", "site"})
 *
 * @SaveModel(microservice="pages", model="page", fields={"id.int"}, url="/page/archive", action="archive")
 * @SaveModel(microservice="pages", model="page", fields={"id.int"}, url="/page/archive", action="unarchive", request_method="delete")
 *
 * @GetModels(microservice="pages", model="categories", url="component/categories", action="getComponent", fields={"name", "code", "description"})
 */
interface Pages
{
    public function savePageEnv(SavePageEnvRequest $request): SavePageEnvResponse;

    public function copyRevision(CopyRevisionRequest $request): CopyRevisionResponse;

    public function getComponents(GetComponentsRequest $request): GetComponentsResponse;

    public function getCommonParameters(GetCommonParametersRequest $request): GetCommonParametersResponse;

    public function getSchemaParameters(GetSchemaParametersRequest $request): GetSchemaParametersResponse;

    public function getConnectors(GetConnectorsRequest $request): GetConnectorsResponse;
}
