<?php

namespace Generated\Perfumer\Microservices\Pages;

abstract class Pages extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Pages\Pages
{
    public function getSite(\Perfumer\Microservices\Pages\Request\Site\GetSiteRequest $request): \Perfumer\Microservices\Pages\Response\Site\GetSiteResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Site\GetSiteResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Site\GetSiteResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'site');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->site = $item;
        }

        return $response;
    }

    public function createSite(\Perfumer\Microservices\Pages\Request\Site\CreateSiteRequest $request): \Perfumer\Microservices\Pages\Response\Site\CreateSiteResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Site\CreateSiteResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Site\CreateSiteResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'site');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->site = $item;
        }

        return $response;
    }

    public function updateSite(\Perfumer\Microservices\Pages\Request\Site\UpdateSiteRequest $request): \Perfumer\Microservices\Pages\Response\Site\UpdateSiteResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Site\UpdateSiteResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Site\UpdateSiteResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'site');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->site = $item;
        }

        return $response;
    }

    public function upsertSite(\Perfumer\Microservices\Pages\Request\Site\UpsertSiteRequest $request): \Perfumer\Microservices\Pages\Response\Site\UpsertSiteResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Site\UpsertSiteResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Site\UpsertSiteResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'site');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->site = $item;
        }

        return $response;
    }

    public function deleteSite(\Perfumer\Microservices\Pages\Request\Site\DeleteSiteRequest $request): \Perfumer\Microservices\Pages\Response\Site\DeleteSiteResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Site\DeleteSiteResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Site\DeleteSiteResponse());

        return $response;
    }

    public function getSites(\Perfumer\Microservices\Pages\Request\Sites\GetSitesRequest $request): \Perfumer\Microservices\Pages\Response\Sites\GetSitesResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Sites\GetSitesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Sites\GetSitesResponse());
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
        /** @var \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Pages\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse());
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
        /** @var \Perfumer\Microservices\Pages\Response\Module\SaveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Module\SaveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function upsertModule(\Perfumer\Microservices\Pages\Request\Module\UpsertModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\UpsertModuleResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Module\UpsertModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Module\UpsertModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Pages\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\DeleteModuleResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Module\DeleteModuleResponse());

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Pages\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\ArchiveModuleResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Module\ArchiveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Pages\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\UnarchiveModuleResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Module\UnarchiveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getRevision(\Perfumer\Microservices\Pages\Request\Revision\GetRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function deleteRevision(\Perfumer\Microservices\Pages\Request\Revision\DeleteRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse());

        return $response;
    }

    public function getRevisions(\Perfumer\Microservices\Pages\Request\Revisions\GetRevisionsRequest $request): \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse());
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
        /** @var \Perfumer\Microservices\Pages\Response\Revision\SaveRevisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revision\SaveRevisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function deleteRevisions(\Perfumer\Microservices\Pages\Request\Revisions\DeleteRevisionsRequest $request): \Perfumer\Microservices\Pages\Response\Revisions\DeleteRevisionsResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Revisions\DeleteRevisionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revisions\DeleteRevisionsResponse());

        return $response;
    }

    public function moveRevision(\Perfumer\Microservices\Pages\Request\Revision\MoveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\MoveRevisionResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Revision\MoveRevisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revision\MoveRevisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function archiveRevision(\Perfumer\Microservices\Pages\Request\Revision\ArchiveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\ArchiveRevisionResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Revision\ArchiveRevisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revision\ArchiveRevisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function unarchiveRevision(\Perfumer\Microservices\Pages\Request\Revision\UnarchiveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\UnarchiveRevisionResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Revision\UnarchiveRevisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revision\UnarchiveRevisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function importRevision(\Perfumer\Microservices\Pages\Request\Revision\ImportRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\ImportRevisionResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Revision\ImportRevisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revision\ImportRevisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function getPage(\Perfumer\Microservices\Pages\Request\Page\GetPageRequest $request): \Perfumer\Microservices\Pages\Response\Page\GetPageResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Page\GetPageResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Page\GetPageResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function createPage(\Perfumer\Microservices\Pages\Request\Page\CreatePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function updatePage(\Perfumer\Microservices\Pages\Request\Page\UpdatePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function upsertPage(\Perfumer\Microservices\Pages\Request\Page\UpsertPageRequest $request): \Perfumer\Microservices\Pages\Response\Page\UpsertPageResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Page\UpsertPageResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Page\UpsertPageResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function deletePage(\Perfumer\Microservices\Pages\Request\Page\DeletePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse());

        return $response;
    }

    public function getPages(\Perfumer\Microservices\Pages\Request\Pages\GetPagesRequest $request): \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse());
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

    public function savePageActiveRevision(\Perfumer\Microservices\Pages\Request\Revision\SavePageActiveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\SavePageActiveRevisionResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Revision\SavePageActiveRevisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revision\SavePageActiveRevisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function getPageActiveRevision(\Perfumer\Microservices\Pages\Request\Revision\GetPageActiveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\GetPageActiveRevisionResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Revision\GetPageActiveRevisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Revision\GetPageActiveRevisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'revision');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->revision = $item;
        }

        return $response;
    }

    public function archivePage(\Perfumer\Microservices\Pages\Request\Page\ArchivePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\ArchivePageResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Page\ArchivePageResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Page\ArchivePageResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function unarchivePage(\Perfumer\Microservices\Pages\Request\Page\UnarchivePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\UnarchivePageResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Page\UnarchivePageResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Page\UnarchivePageResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'page');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->page = $item;
        }

        return $response;
    }

    public function getComponentCategories(\Perfumer\Microservices\Pages\Request\Component\GetComponentCategoriesRequest $request): \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoriesResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoriesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoriesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'categories');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->categories = $item;
        }
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
        /** @var \Perfumer\Microservices\Pages\Response\Components\GetComponentsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Components\GetComponentsResponse());
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
        /** @var \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Component\GetComponentCategoryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'category');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->category = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'component');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->component = $item;
        }

        return $response;
    }

    public function getComponent(\Perfumer\Microservices\Pages\Request\Component\GetComponentRequest $request): \Perfumer\Microservices\Pages\Response\Component\GetComponentResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Component\GetComponentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Component\GetComponentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'component');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->component = $item;
        }

        return $response;
    }

    public function getComponentParameters(\Perfumer\Microservices\Pages\Request\Component\GetComponentParametersRequest $request): \Perfumer\Microservices\Pages\Response\Component\GetComponentParametersResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Component\GetComponentParametersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Component\GetComponentParametersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'parameters');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->parameters = $item;
        }
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

    public function saveComponentCategory(\Perfumer\Microservices\Pages\Request\Component\SaveComponentCategoryRequest $request): \Perfumer\Microservices\Pages\Response\Component\SaveComponentCategoryResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Component\SaveComponentCategoryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Component\SaveComponentCategoryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'component');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->component = $item;
        }

        return $response;
    }

    public function deleteComponentCategory(\Perfumer\Microservices\Pages\Request\Component\DeleteComponentCategoryRequest $request): \Perfumer\Microservices\Pages\Response\Component\DeleteComponentCategoryResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Component\DeleteComponentCategoryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Component\DeleteComponentCategoryResponse());

        return $response;
    }

    public function saveComponent(\Perfumer\Microservices\Pages\Request\Component\SaveComponentRequest $request): \Perfumer\Microservices\Pages\Response\Component\SaveComponentResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Component\SaveComponentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Component\SaveComponentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'component');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->component = $item;
        }

        return $response;
    }

    public function getConnectorCategories(\Perfumer\Microservices\Pages\Request\Connector\GetConnectorCategoriesRequest $request): \Perfumer\Microservices\Pages\Response\Connector\GetConnectorCategoriesResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Connector\GetConnectorCategoriesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Connector\GetConnectorCategoriesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'categories');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->categories = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'connector');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->connector = $item;
        }

        return $response;
    }

    public function getConnectors(\Perfumer\Microservices\Pages\Request\Connectors\GetConnectorsRequest $request): \Perfumer\Microservices\Pages\Response\Connectors\GetConnectorsResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Connectors\GetConnectorsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Connectors\GetConnectorsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'connectors');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->connectors = $item;
        }

        return $response;
    }

    public function getConnectorCategory(\Perfumer\Microservices\Pages\Request\Connector\GetConnectorCategoryRequest $request): \Perfumer\Microservices\Pages\Response\Connector\GetConnectorCategoryResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Connector\GetConnectorCategoryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Connector\GetConnectorCategoryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'category');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->category = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'connector');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->connector = $item;
        }

        return $response;
    }

    public function getConnector(\Perfumer\Microservices\Pages\Request\Connector\GetConnectorRequest $request): \Perfumer\Microservices\Pages\Response\Connector\GetConnectorResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Connector\GetConnectorResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Connector\GetConnectorResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'connector');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->connector = $item;
        }

        return $response;
    }

    public function getConnectorArguments(\Perfumer\Microservices\Pages\Request\Connector\GetConnectorArgumentsRequest $request): \Perfumer\Microservices\Pages\Response\Connector\GetConnectorArgumentsResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Connector\GetConnectorArgumentsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Connector\GetConnectorArgumentsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'arguments');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->arguments = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'connector');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->connector = $item;
        }

        return $response;
    }

    public function saveConnectorCategory(\Perfumer\Microservices\Pages\Request\Connector\SaveConnectorCategoryRequest $request): \Perfumer\Microservices\Pages\Response\Connector\SaveConnectorCategoryResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Connector\SaveConnectorCategoryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Connector\SaveConnectorCategoryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'connector');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->connector = $item;
        }

        return $response;
    }

    public function deleteConnectorCategory(\Perfumer\Microservices\Pages\Request\Connector\DeleteConnectorCategoryRequest $request): \Perfumer\Microservices\Pages\Response\Connector\DeleteConnectorCategoryResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Connector\DeleteConnectorCategoryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Connector\DeleteConnectorCategoryResponse());

        return $response;
    }

    public function saveConnector(\Perfumer\Microservices\Pages\Request\Connector\SaveConnectorRequest $request): \Perfumer\Microservices\Pages\Response\Connector\SaveConnectorResponse
    {
        /** @var \Perfumer\Microservices\Pages\Response\Connector\SaveConnectorResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Pages\Response\Connector\SaveConnectorResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'connector');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->connector = $item;
        }

        return $response;
    }
}
