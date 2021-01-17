<?php

namespace Generated\Perfumer\Microservices\Pages;

abstract class Pages extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Pages\Pages
{
    public function getSite(\Perfumer\Microservices\Pages\Request\Site\GetSiteRequest $request): \Perfumer\Microservices\Pages\Response\Site\GetSiteResponse
    {
        $url = '/site';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Site\GetSiteResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Site\GetSiteResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'site');

        $response->site = $array;

        return $response;
    }

    public function getSites(\Perfumer\Microservices\Pages\Request\Sites\GetSitesRequest $request): \Perfumer\Microservices\Pages\Response\Sites\GetSitesResponse
    {
        $url = '/sites';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Sites\GetSitesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Pages\Response\Sites\GetSitesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->sites = $this->fetchKeyFromContent($response->_content, 'sites');

        return $response;
    }

    public function getModule(\Perfumer\Microservices\Pages\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse
    {
        $url = '/module';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        $response->module = $array;

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Pages\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse
    {
        $url = '/modules';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'parent' => $request->parent,
        'child' => $request->child,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->modules = $this->fetchKeyFromContent($response->_content, 'modules');

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
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Module\SaveModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        if (null !== $array) {
            $response->module = $array;
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
        ]);

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Pages\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\ArchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\ArchiveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Module\ArchiveModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        if (null !== $array) {
            $response->module = $array;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Pages\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\UnarchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\UnarchiveModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Module\UnarchiveModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        if (null !== $array) {
            $response->module = $array;
        }

        return $response;
    }

    public function getRevision(\Perfumer\Microservices\Pages\Request\Revision\GetRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse
    {
        $url = '/revision';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse(), 'get', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'revision');

        $response->revision = $array;

        return $response;
    }

    public function deleteRevision(\Perfumer\Microservices\Pages\Request\Revision\DeleteRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse
    {
        $url = '/revision';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse(), 'delete', $url, [
        'id' => $request->id,
        ]);

        return $response;
    }

    public function getRevisions(\Perfumer\Microservices\Pages\Request\Revisions\GetRevisionsRequest $request): \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse
    {
        $url = '/revisions';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse(), 'get', $url, [
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'page_id' => $request->page_id,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->revisions = $this->fetchKeyFromContent($response->_content, 'revisions');

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
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Revision\SaveRevisionResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'revision');

        if (null !== $array) {
            $response->revision = $array;
        }

        return $response;
    }

    public function archiveRevision(\Perfumer\Microservices\Pages\Request\Revision\ArchiveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\ArchiveRevisionResponse
    {
        $url = '/revision/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\ArchiveRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\ArchiveRevisionResponse(), 'post', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Revision\ArchiveRevisionResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'revision');

        if (null !== $array) {
            $response->revision = $array;
        }

        return $response;
    }

    public function unarchiveRevision(\Perfumer\Microservices\Pages\Request\Revision\UnarchiveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\UnarchiveRevisionResponse
    {
        $url = '/revision/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\UnarchiveRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\UnarchiveRevisionResponse(), 'delete', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Revision\UnarchiveRevisionResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'revision');

        if (null !== $array) {
            $response->revision = $array;
        }

        return $response;
    }

    public function getPage(\Perfumer\Microservices\Pages\Request\Page\GetPageRequest $request): \Perfumer\Microservices\Pages\Response\Page\GetPageResponse
    {
        $url = '/page';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\GetPageResponse(), 'get', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Page\GetPageResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'page');

        $response->page = $array;

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
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'page');

        if (null !== $array) {
            $response->page = $array;
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
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'page');

        if (null !== $array) {
            $response->page = $array;
        }

        return $response;
    }

    public function deletePage(\Perfumer\Microservices\Pages\Request\Page\DeletePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse
    {
        $url = '/page';

        /** @var \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse(), 'delete', $url, [
        'id' => $request->id,
        ]);

        return $response;
    }

    public function getPages(\Perfumer\Microservices\Pages\Request\Pages\GetPagesRequest $request): \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse
    {
        $url = '/pages';

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
        ]);

        /* @var \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->pages = $this->fetchKeyFromContent($response->_content, 'pages');

        return $response;
    }

    public function archivePage(\Perfumer\Microservices\Pages\Request\Page\ArchivePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\ArchivePageResponse
    {
        $url = '/page/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Page\ArchivePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\ArchivePageResponse(), 'post', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Page\ArchivePageResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'page');

        if (null !== $array) {
            $response->page = $array;
        }

        return $response;
    }

    public function unarchivePage(\Perfumer\Microservices\Pages\Request\Page\UnarchivePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\UnarchivePageResponse
    {
        $url = '/page/archive';

        /** @var \Perfumer\Microservices\Pages\Response\Page\UnarchivePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\UnarchivePageResponse(), 'delete', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Page\UnarchivePageResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'page');

        if (null !== $array) {
            $response->page = $array;
        }

        return $response;
    }
}
