<?php

namespace Generated\Perfumer\Microservices\Forms;

abstract class Forms extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Forms\Forms
{
    public function getForm(\Perfumer\Microservices\Forms\Request\Form\GetFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\GetFormResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Form\GetFormResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Form\GetFormResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'form');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->form = $item;
        }

        return $response;
    }

    public function deleteForm(\Perfumer\Microservices\Forms\Request\Form\DeleteFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\DeleteFormResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Form\DeleteFormResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Form\DeleteFormResponse());

        return $response;
    }

    public function createForm(\Perfumer\Microservices\Forms\Request\Form\CreateFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\CreateFormResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Form\CreateFormResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Form\CreateFormResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'form');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->form = $item;
        }

        return $response;
    }

    public function updateForm(\Perfumer\Microservices\Forms\Request\Form\UpdateFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\UpdateFormResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Form\UpdateFormResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Form\UpdateFormResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'form');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->form = $item;
        }

        return $response;
    }

    public function upsertForm(\Perfumer\Microservices\Forms\Request\Form\UpsertFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\UpsertFormResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Form\UpsertFormResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Form\UpsertFormResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'form');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->form = $item;
        }

        return $response;
    }

    public function saveForm(\Perfumer\Microservices\Forms\Request\Form\SaveFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\SaveFormResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Form\SaveFormResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Form\SaveFormResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'form');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->form = $item;
        }

        return $response;
    }

    public function createForms(\Perfumer\Microservices\Forms\Request\Forms\CreateFormsRequest $request): \Perfumer\Microservices\Forms\Response\Forms\CreateFormsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Forms\CreateFormsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Forms\CreateFormsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'forms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->forms = $item;
        }

        return $response;
    }

    public function saveFormsTicket(\Perfumer\Microservices\Forms\Request\Forms\SaveFormsTicketRequest $request): \Perfumer\Microservices\Forms\Response\Forms\SaveFormsTicketResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Forms\SaveFormsTicketResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Forms\SaveFormsTicketResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'forms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->forms = $item;
        }

        return $response;
    }

    public function getForms(\Perfumer\Microservices\Forms\Request\Forms\GetFormsRequest $request): \Perfumer\Microservices\Forms\Response\Forms\GetFormsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Forms\GetFormsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Forms\GetFormsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'forms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->forms = $item;
        }

        return $response;
    }

    public function upsertUserForms(\Perfumer\Microservices\Forms\Request\Forms\UpsertUserFormsRequest $request): \Perfumer\Microservices\Forms\Response\Forms\UpsertUserFormsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Forms\UpsertUserFormsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Forms\UpsertUserFormsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'forms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->forms = $item;
        }

        return $response;
    }

    public function getItem(\Perfumer\Microservices\Forms\Request\Item\GetItemRequest $request): \Perfumer\Microservices\Forms\Response\Item\GetItemResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Item\GetItemResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Item\GetItemResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'item');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->item = $item;
        }

        return $response;
    }

    public function deleteItem(\Perfumer\Microservices\Forms\Request\Item\DeleteItemRequest $request): \Perfumer\Microservices\Forms\Response\Item\DeleteItemResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Item\DeleteItemResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Item\DeleteItemResponse());

        return $response;
    }

    public function createItem(\Perfumer\Microservices\Forms\Request\Item\CreateItemRequest $request): \Perfumer\Microservices\Forms\Response\Item\CreateItemResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Item\CreateItemResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Item\CreateItemResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'item');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->item = $item;
        }

        return $response;
    }

    public function updateItem(\Perfumer\Microservices\Forms\Request\Item\UpdateItemRequest $request): \Perfumer\Microservices\Forms\Response\Item\UpdateItemResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Item\UpdateItemResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Item\UpdateItemResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'item');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->item = $item;
        }

        return $response;
    }

    public function getItems(\Perfumer\Microservices\Forms\Request\Items\GetItemsRequest $request): \Perfumer\Microservices\Forms\Response\Items\GetItemsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Items\GetItemsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Items\GetItemsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'items');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->items = $item;
        }

        return $response;
    }

    public function saveItems(\Perfumer\Microservices\Forms\Request\Items\SaveItemsRequest $request): \Perfumer\Microservices\Forms\Response\Items\SaveItemsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Items\SaveItemsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Items\SaveItemsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'items');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->items = $item;
        }

        return $response;
    }

    public function getField(\Perfumer\Microservices\Forms\Request\Field\GetFieldRequest $request): \Perfumer\Microservices\Forms\Response\Field\GetFieldResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Field\GetFieldResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Field\GetFieldResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'field');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->field = $item;
        }

        return $response;
    }

    public function deleteField(\Perfumer\Microservices\Forms\Request\Field\DeleteFieldRequest $request): \Perfumer\Microservices\Forms\Response\Field\DeleteFieldResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Field\DeleteFieldResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Field\DeleteFieldResponse());

        return $response;
    }

    public function saveField(\Perfumer\Microservices\Forms\Request\Field\SaveFieldRequest $request): \Perfumer\Microservices\Forms\Response\Field\SaveFieldResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Field\SaveFieldResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Field\SaveFieldResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'field');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->field = $item;
        }

        return $response;
    }

    public function updateField(\Perfumer\Microservices\Forms\Request\Field\UpdateFieldRequest $request): \Perfumer\Microservices\Forms\Response\Field\UpdateFieldResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Field\UpdateFieldResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Field\UpdateFieldResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'field');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->field = $item;
        }

        return $response;
    }

    public function getFields(\Perfumer\Microservices\Forms\Request\Fields\GetFieldsRequest $request): \Perfumer\Microservices\Forms\Response\Fields\GetFieldsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Fields\GetFieldsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Fields\GetFieldsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'fields');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->fields = $item;
        }

        return $response;
    }

    public function processFieldValues(\Perfumer\Microservices\Forms\Request\Field\ProcessFieldValuesRequest $request): \Perfumer\Microservices\Forms\Response\Field\ProcessFieldValuesResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Field\ProcessFieldValuesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Field\ProcessFieldValuesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'field');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->field = $item;
        }

        return $response;
    }

    public function changeFieldsOrder(\Perfumer\Microservices\Forms\Request\Fields\ChangeFieldsOrderRequest $request): \Perfumer\Microservices\Forms\Response\Fields\ChangeFieldsOrderResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Fields\ChangeFieldsOrderResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Fields\ChangeFieldsOrderResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'fields');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->fields = $item;
        }

        return $response;
    }

    public function getModule(\Perfumer\Microservices\Forms\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\GetModuleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\GetModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Forms\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\DeleteModuleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\DeleteModuleResponse());

        return $response;
    }

    public function createModule(\Perfumer\Microservices\Forms\Request\Module\CreateModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\CreateModuleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\CreateModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\CreateModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function updateModule(\Perfumer\Microservices\Forms\Request\Module\UpdateModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\UpdateModuleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\UpdateModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\UpdateModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function upsertModule(\Perfumer\Microservices\Forms\Request\Module\UpsertModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\UpsertModuleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\UpsertModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\UpsertModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Forms\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Forms\Response\Modules\GetModulesResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Modules\GetModulesResponse());
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

    public function copyModule(\Perfumer\Microservices\Forms\Request\Module\CopyModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\CopyModuleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\CopyModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\CopyModuleResponse());

        return $response;
    }

    public function migrateModule(\Perfumer\Microservices\Forms\Request\Module\MigrateModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\MigrateModuleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\MigrateModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\MigrateModuleResponse());

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Forms\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\ArchiveModuleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\ArchiveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Forms\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\UnarchiveModuleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\UnarchiveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function addModuleRole(\Perfumer\Microservices\Forms\Request\Module\AddModuleRoleRequest $request): \Perfumer\Microservices\Forms\Response\Module\AddModuleRoleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\AddModuleRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\AddModuleRoleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModuleRole(\Perfumer\Microservices\Forms\Request\Module\DeleteModuleRoleRequest $request): \Perfumer\Microservices\Forms\Response\Module\DeleteModuleRoleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\DeleteModuleRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\DeleteModuleRoleResponse());

        return $response;
    }

    public function getModuleRoles(\Perfumer\Microservices\Forms\Request\Module\GetModuleRolesRequest $request): \Perfumer\Microservices\Forms\Response\Module\GetModuleRolesResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\GetModuleRolesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\GetModuleRolesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module_roles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module_roles = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function upsertModuleFields(\Perfumer\Microservices\Forms\Request\Module\UpsertModuleFieldsRequest $request): \Perfumer\Microservices\Forms\Response\Module\UpsertModuleFieldsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\UpsertModuleFieldsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\UpsertModuleFieldsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function addModuleFields(\Perfumer\Microservices\Forms\Request\Module\AddModuleFieldsRequest $request): \Perfumer\Microservices\Forms\Response\Module\AddModuleFieldsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Module\AddModuleFieldsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Module\AddModuleFieldsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getReference(\Perfumer\Microservices\Forms\Request\Reference\GetReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\GetReferenceResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Reference\GetReferenceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Reference\GetReferenceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'reference');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->reference = $item;
        }

        return $response;
    }

    public function deleteReference(\Perfumer\Microservices\Forms\Request\Reference\DeleteReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\DeleteReferenceResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Reference\DeleteReferenceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Reference\DeleteReferenceResponse());

        return $response;
    }

    public function createReference(\Perfumer\Microservices\Forms\Request\Reference\CreateReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\CreateReferenceResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Reference\CreateReferenceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Reference\CreateReferenceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'reference');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->reference = $item;
        }

        return $response;
    }

    public function updateReference(\Perfumer\Microservices\Forms\Request\Reference\UpdateReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\UpdateReferenceResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Reference\UpdateReferenceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Reference\UpdateReferenceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'reference');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->reference = $item;
        }

        return $response;
    }

    public function upsertReference(\Perfumer\Microservices\Forms\Request\Reference\UpsertReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\UpsertReferenceResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Reference\UpsertReferenceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Reference\UpsertReferenceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'reference');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->reference = $item;
        }

        return $response;
    }

    public function copyReference(\Perfumer\Microservices\Forms\Request\Reference\CopyReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\CopyReferenceResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Reference\CopyReferenceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Reference\CopyReferenceResponse());

        return $response;
    }

    public function migrateReference(\Perfumer\Microservices\Forms\Request\Reference\MigrateReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\MigrateReferenceResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Reference\MigrateReferenceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Reference\MigrateReferenceResponse());

        return $response;
    }

    public function getReferences(\Perfumer\Microservices\Forms\Request\References\GetReferencesRequest $request): \Perfumer\Microservices\Forms\Response\References\GetReferencesResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\References\GetReferencesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\References\GetReferencesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'references');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->references = $item;
        }

        return $response;
    }

    public function triggerExternalReference(\Perfumer\Microservices\Forms\Request\Reference\TriggerExternalReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\TriggerExternalReferenceResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Reference\TriggerExternalReferenceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Reference\TriggerExternalReferenceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'reference');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->reference = $item;
        }

        return $response;
    }

    public function getValue(\Perfumer\Microservices\Forms\Request\Value\GetValueRequest $request): \Perfumer\Microservices\Forms\Response\Value\GetValueResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Value\GetValueResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Value\GetValueResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'value');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->value = $item;
        }

        return $response;
    }

    public function deleteValue(\Perfumer\Microservices\Forms\Request\Value\DeleteValueRequest $request): \Perfumer\Microservices\Forms\Response\Value\DeleteValueResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Value\DeleteValueResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Value\DeleteValueResponse());

        return $response;
    }

    public function createValue(\Perfumer\Microservices\Forms\Request\Value\CreateValueRequest $request): \Perfumer\Microservices\Forms\Response\Value\CreateValueResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Value\CreateValueResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Value\CreateValueResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'value');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->value = $item;
        }

        return $response;
    }

    public function updateValue(\Perfumer\Microservices\Forms\Request\Value\UpdateValueRequest $request): \Perfumer\Microservices\Forms\Response\Value\UpdateValueResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Value\UpdateValueResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Value\UpdateValueResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'value');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->value = $item;
        }

        return $response;
    }

    public function upsertValue(\Perfumer\Microservices\Forms\Request\Value\UpsertValueRequest $request): \Perfumer\Microservices\Forms\Response\Value\UpsertValueResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Value\UpsertValueResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Value\UpsertValueResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'value');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->value = $item;
        }

        return $response;
    }

    public function getArticle(\Perfumer\Microservices\Forms\Request\Article\GetArticleRequest $request): \Perfumer\Microservices\Forms\Response\Article\GetArticleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Article\GetArticleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Article\GetArticleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'article');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->article = $item;
        }

        return $response;
    }

    public function deleteArticle(\Perfumer\Microservices\Forms\Request\Article\DeleteArticleRequest $request): \Perfumer\Microservices\Forms\Response\Article\DeleteArticleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Article\DeleteArticleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Article\DeleteArticleResponse());

        return $response;
    }

    public function saveArticle(\Perfumer\Microservices\Forms\Request\Article\SaveArticleRequest $request): \Perfumer\Microservices\Forms\Response\Article\SaveArticleResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Article\SaveArticleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Article\SaveArticleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'article');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->article = $item;
        }

        return $response;
    }

    public function getArticles(\Perfumer\Microservices\Forms\Request\Articles\GetArticlesRequest $request): \Perfumer\Microservices\Forms\Response\Articles\GetArticlesResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Articles\GetArticlesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Articles\GetArticlesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'articles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->articles = $item;
        }

        return $response;
    }

    public function getFixes(\Perfumer\Microservices\Forms\Request\Fixes\GetFixesRequest $request): \Perfumer\Microservices\Forms\Response\Fixes\GetFixesResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Fixes\GetFixesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Fixes\GetFixesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'fixes');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->fixes = $item;
        }

        return $response;
    }

    public function getTable(\Perfumer\Microservices\Forms\Request\Table\GetTableRequest $request): \Perfumer\Microservices\Forms\Response\Table\GetTableResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Table\GetTableResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Table\GetTableResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table = $item;
        }

        return $response;
    }

    public function deleteTable(\Perfumer\Microservices\Forms\Request\Table\DeleteTableRequest $request): \Perfumer\Microservices\Forms\Response\Table\DeleteTableResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Table\DeleteTableResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Table\DeleteTableResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table = $item;
        }

        return $response;
    }

    public function createTable(\Perfumer\Microservices\Forms\Request\Table\CreateTableRequest $request): \Perfumer\Microservices\Forms\Response\Table\CreateTableResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Table\CreateTableResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Table\CreateTableResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table = $item;
        }

        return $response;
    }

    public function updateTable(\Perfumer\Microservices\Forms\Request\Table\UpdateTableRequest $request): \Perfumer\Microservices\Forms\Response\Table\UpdateTableResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Table\UpdateTableResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Table\UpdateTableResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table = $item;
        }

        return $response;
    }

    public function getTables(\Perfumer\Microservices\Forms\Request\Tables\GetTablesRequest $request): \Perfumer\Microservices\Forms\Response\Tables\GetTablesResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Tables\GetTablesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Tables\GetTablesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'tables');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tables = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }

        return $response;
    }

    public function getTableRow(\Perfumer\Microservices\Forms\Request\TableRow\GetTableRowRequest $request): \Perfumer\Microservices\Forms\Response\TableRow\GetTableRowResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\TableRow\GetTableRowResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\TableRow\GetTableRowResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table_row');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table_row = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'tableRow');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tableRow = $item;
        }

        return $response;
    }

    public function deleteTableRow(\Perfumer\Microservices\Forms\Request\TableRow\DeleteTableRowRequest $request): \Perfumer\Microservices\Forms\Response\TableRow\DeleteTableRowResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\TableRow\DeleteTableRowResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\TableRow\DeleteTableRowResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table_row');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table_row = $item;
        }

        return $response;
    }

    public function createTableRow(\Perfumer\Microservices\Forms\Request\TableRow\CreateTableRowRequest $request): \Perfumer\Microservices\Forms\Response\TableRow\CreateTableRowResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\TableRow\CreateTableRowResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\TableRow\CreateTableRowResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table_row');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table_row = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'tableRow');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tableRow = $item;
        }

        return $response;
    }

    public function updateTableRow(\Perfumer\Microservices\Forms\Request\TableRow\UpdateTableRowRequest $request): \Perfumer\Microservices\Forms\Response\TableRow\UpdateTableRowResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\TableRow\UpdateTableRowResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\TableRow\UpdateTableRowResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table_row');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table_row = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'tableRow');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tableRow = $item;
        }

        return $response;
    }

    public function getTableRows(\Perfumer\Microservices\Forms\Request\TableRows\GetTableRowsRequest $request): \Perfumer\Microservices\Forms\Response\TableRows\GetTableRowsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\TableRows\GetTableRowsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\TableRows\GetTableRowsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table_rows');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table_rows = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'tableRows');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tableRows = $item;
        }

        return $response;
    }

    public function getTableSettings(\Perfumer\Microservices\Forms\Request\Table\GetTableSettingsRequest $request): \Perfumer\Microservices\Forms\Response\Table\GetTableSettingsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Table\GetTableSettingsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Table\GetTableSettingsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table = $item;
        }

        return $response;
    }

    public function saveTableSettings(\Perfumer\Microservices\Forms\Request\Table\SaveTableSettingsRequest $request): \Perfumer\Microservices\Forms\Response\Table\SaveTableSettingsResponse
    {
        /** @var \Perfumer\Microservices\Forms\Response\Table\SaveTableSettingsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Forms\Response\Table\SaveTableSettingsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'table');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->table = $item;
        }

        return $response;
    }
}
