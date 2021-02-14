<?php

namespace Generated\Perfumer\Microservices\Pages;

abstract class Pages extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Pages\Pages
{
    public function getSite(\Perfumer\Microservices\Pages\Request\Site\GetSiteRequest $request): \Perfumer\Microservices\Pages\Response\Site\GetSiteResponse
    {
        $url = '/site';

        /** @var \Perfumer\Microservices\Pages\Response\Site\GetSiteResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Site\GetSiteResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'site');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->site = $item;
        }

        return $response;
    }

    public function getSites(\Perfumer\Microservices\Pages\Request\Sites\GetSitesRequest $request): \Perfumer\Microservices\Pages\Response\Sites\GetSitesResponse
    {
        $url = '/sites';

        /** @var \Perfumer\Microservices\Pages\Response\Sites\GetSitesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Sites\GetSitesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'sites');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->sites = $item;
        }

        return $response;
    }

    public function getModule(\Perfumer\Microservices\Pages\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Pages\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse
    {
        $url = '/modules';

        /** @var \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'parent' => $request->parent,
        'parents' => $request->parents,
        'child' => $request->child,
        'children' => $request->children,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'modules');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->modules = $item;
        }

        return $response;
    }

    public function saveModule(\Perfumer\Microservices\Pages\Request\Module\SaveModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\SaveModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Pages\Response\Module\SaveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\SaveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'parents' => $request->parents,
        'children' => $request->children,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Pages\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\DeleteModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Pages\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\DeleteModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug);

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Pages\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\ArchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\ArchiveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Pages\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\UnarchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\UnarchiveModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getRevision(\Perfumer\Microservices\Pages\Request\Revision\GetRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse
    {
        $url = '/revision';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse(), 'get', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function deleteRevision(\Perfumer\Microservices\Pages\Request\Revision\DeleteRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse
    {
        $url = '/revision';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug);

        return $response;
    }

    public function getRevisions(\Perfumer\Microservices\Pages\Request\Revisions\GetRevisionsRequest $request): \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse
    {
        $url = '/revisions';

        /** @var \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse(), 'get', $url, [
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'page_id' => $request->page_id,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'revisions');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revisions = $item;
        }

        return $response;
    }

    public function saveRevision(\Perfumer\Microservices\Pages\Request\Revision\SaveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\SaveRevisionResponse
    {
        $url = '/revision';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\SaveRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\SaveRevisionResponse(), 'post', $url, [
        'id' => $request->id,
        'page_id' => $request->page_id,
        'name' => $request->name,
        'description' => $request->description,
        'blocks' => $request->blocks,
        'parameters' => $request->parameters,
        'is_archived' => $request->is_archived,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function archiveRevision(\Perfumer\Microservices\Pages\Request\Revision\ArchiveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\ArchiveRevisionResponse
    {
        $url = '/revision/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\ArchiveRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\ArchiveRevisionResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function unarchiveRevision(\Perfumer\Microservices\Pages\Request\Revision\UnarchiveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\UnarchiveRevisionResponse
    {
        $url = '/revision/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\UnarchiveRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\UnarchiveRevisionResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function getPage(\Perfumer\Microservices\Pages\Request\Page\GetPageRequest $request): \Perfumer\Microservices\Pages\Response\Page\GetPageResponse
    {
        $url = '/page';

        /** @var \Perfumer\Microservices\Pages\Response\Page\GetPageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\GetPageResponse(), 'get', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function createPage(\Perfumer\Microservices\Pages\Request\Page\CreatePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse
    {
        $url = '/page';

        /** @var \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse(), 'post', $url, [
        'name' => $request->name,
        'address' => $request->address,
        'description' => $request->description,
        'module_id' => $request->module_id,
        'site_id' => $request->site_id,
        'module_code' => $request->module_code,
        'is_archived' => $request->is_archived,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function updatePage(\Perfumer\Microservices\Pages\Request\Page\UpdatePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse
    {
        $url = '/page';

        /** @var \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse(), 'patch', $url, [
        'id' => $request->id,
        'name' => $request->name,
        'address' => $request->address,
        'description' => $request->description,
        'module_id' => $request->module_id,
        'site_id' => $request->site_id,
        'module_code' => $request->module_code,
        'is_archived' => $request->is_archived,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function deletePage(\Perfumer\Microservices\Pages\Request\Page\DeletePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse
    {
        $url = '/page';

        /** @var \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug);

        return $response;
    }

    public function getPages(\Perfumer\Microservices\Pages\Request\Pages\GetPagesRequest $request): \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse
    {
        $url = '/pages';

        /** @var \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse(), 'get', $url, [
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'address' => $request->address,
        'module_id' => $request->module_id,
        'site_id' => $request->site_id,
        'module_code' => $request->module_code,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'pages');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->pages = $item;
        }

        return $response;
    }

    public function getPageStageRevision(\Perfumer\Microservices\Pages\Request\Revision\GetPageStageRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\GetPageStageRevisionResponse
    {
        $url = '/page/revision/stage';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\GetPageStageRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\GetPageStageRevisionResponse(), 'get', $url, [
        'page_id' => $request->page_id,
        'address' => $request->address,
        'site' => $request->site,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function getPageProdRevision(\Perfumer\Microservices\Pages\Request\Revision\GetPageProdRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\GetPageProdRevisionResponse
    {
        $url = '/page/revision/prod';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\GetPageProdRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\GetPageProdRevisionResponse(), 'get', $url, [
        'page_id' => $request->page_id,
        'address' => $request->address,
        'site' => $request->site,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function archivePage(\Perfumer\Microservices\Pages\Request\Page\ArchivePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\ArchivePageResponse
    {
        $url = '/page/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Page\ArchivePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\ArchivePageResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function unarchivePage(\Perfumer\Microservices\Pages\Request\Page\UnarchivePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\UnarchivePageResponse
    {
        $url = '/page/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Page\UnarchivePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\UnarchivePageResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function getComponentCategories(\Perfumer\Microservices\Pages\Request\Component\GetComponentCategoriesRequest $request): \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoriesResponse
    {
        $url = '/component/categories';

        /** @var \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoriesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoriesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'component');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->component = $item;
        }

        return $response;
    }

    public function getComponents(\Perfumer\Microservices\Pages\Request\Components\GetComponentsRequest $request): \Perfumer\Microservices\Pages\Response\Components\GetComponentsResponse
    {
        $url = '/components';

        /** @var \Perfumer\Microservices\Pages\Response\Components\GetComponentsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Components\GetComponentsResponse(), 'get', $url, [
        'category_id' => $request->category_id,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'components');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->components = $item;
        }

        return $response;
    }

    public function getComponentCategory(\Perfumer\Microservices\Pages\Request\Component\GetComponentCategoryRequest $request): \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoryResponse
    {
        $url = '/component/category';

        /** @var \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoryResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoryResponse(), 'get', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'component');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->component = $item;
        }

        return $response;
    }
}
