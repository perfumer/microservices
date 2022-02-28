<?php

namespace Generated\Perfumer\Microservices\Sed;

abstract class Sed extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Sed\Sed
{
    public function createDocument(\Perfumer\Microservices\Sed\Request\Document\CreateDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\CreateDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\CreateDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\CreateDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function saveDocument(\Perfumer\Microservices\Sed\Request\Document\SaveDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\SaveDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\SaveDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\SaveDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function updateDocument(\Perfumer\Microservices\Sed\Request\Document\UpdateDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\UpdateDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\UpdateDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\UpdateDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function deleteDocument(\Perfumer\Microservices\Sed\Request\Document\DeleteDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\DeleteDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\DeleteDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\DeleteDocumentResponse());

        return $response;
    }

    public function getDocument(\Perfumer\Microservices\Sed\Request\Document\GetDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\GetDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\GetDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\GetDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function getDocuments(\Perfumer\Microservices\Sed\Request\Documents\GetDocumentsRequest $request): \Perfumer\Microservices\Sed\Response\Documents\GetDocumentsResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Documents\GetDocumentsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Documents\GetDocumentsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'documents');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->documents = $item;
        }

        return $response;
    }

    public function publishDocument(\Perfumer\Microservices\Sed\Request\Document\PublishDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\PublishDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\PublishDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\PublishDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function signDocument(\Perfumer\Microservices\Sed\Request\Document\SignDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\SignDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\SignDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\SignDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function waitDocument(\Perfumer\Microservices\Sed\Request\Document\WaitDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\WaitDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\WaitDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\WaitDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function rejectDocument(\Perfumer\Microservices\Sed\Request\Document\RejectDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\RejectDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\RejectDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\RejectDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function openSignDocument(\Perfumer\Microservices\Sed\Request\Document\OpenSignDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\OpenSignDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\OpenSignDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\OpenSignDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function closeSignDocument(\Perfumer\Microservices\Sed\Request\Document\CloseSignDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\CloseSignDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\CloseSignDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\CloseSignDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function openLinkDocument(\Perfumer\Microservices\Sed\Request\Document\OpenLinkDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\OpenLinkDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\OpenLinkDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\OpenLinkDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function closeLinkDocument(\Perfumer\Microservices\Sed\Request\Document\CloseLinkDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\CloseLinkDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\CloseLinkDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\CloseLinkDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function formDocument(\Perfumer\Microservices\Sed\Request\Document\FormDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\FormDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\FormDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\FormDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function copyDocument(\Perfumer\Microservices\Sed\Request\Document\CopyDocumentRequest $request): \Perfumer\Microservices\Sed\Response\Document\CopyDocumentResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Document\CopyDocumentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Document\CopyDocumentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document = $item;
        }

        return $response;
    }

    public function getTemplates(\Perfumer\Microservices\Sed\Request\Templates\GetTemplatesRequest $request): \Perfumer\Microservices\Sed\Response\Templates\GetTemplatesResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Templates\GetTemplatesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Templates\GetTemplatesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'templates');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->templates = $item;
        }

        return $response;
    }

    public function getTemplate(\Perfumer\Microservices\Sed\Request\Template\GetTemplateRequest $request): \Perfumer\Microservices\Sed\Response\Template\GetTemplateResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Template\GetTemplateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Template\GetTemplateResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'template');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->template = $item;
        }

        return $response;
    }

    public function saveTemplate(\Perfumer\Microservices\Sed\Request\Template\SaveTemplateRequest $request): \Perfumer\Microservices\Sed\Response\Template\SaveTemplateResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Template\SaveTemplateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Template\SaveTemplateResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'template');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->template = $item;
        }

        return $response;
    }

    public function createTemplate(\Perfumer\Microservices\Sed\Request\Template\CreateTemplateRequest $request): \Perfumer\Microservices\Sed\Response\Template\CreateTemplateResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Template\CreateTemplateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Template\CreateTemplateResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'template');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->template = $item;
        }

        return $response;
    }

    public function updateTemplate(\Perfumer\Microservices\Sed\Request\Template\UpdateTemplateRequest $request): \Perfumer\Microservices\Sed\Response\Template\UpdateTemplateResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Template\UpdateTemplateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Template\UpdateTemplateResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'template');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->template = $item;
        }

        return $response;
    }

    public function deleteTemplate(\Perfumer\Microservices\Sed\Request\Template\DeleteTemplateRequest $request): \Perfumer\Microservices\Sed\Response\Template\DeleteTemplateResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Template\DeleteTemplateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Template\DeleteTemplateResponse());

        return $response;
    }

    public function copyTemplate(\Perfumer\Microservices\Sed\Request\Template\CopyTemplateRequest $request): \Perfumer\Microservices\Sed\Response\Template\CopyTemplateResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Template\CopyTemplateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Template\CopyTemplateResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'template');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->template = $item;
        }

        return $response;
    }

    public function getSigners(\Perfumer\Microservices\Sed\Request\Signers\GetSignersRequest $request): \Perfumer\Microservices\Sed\Response\Signers\GetSignersResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Signers\GetSignersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Signers\GetSignersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'signers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signers = $item;
        }

        return $response;
    }

    public function getSigner(\Perfumer\Microservices\Sed\Request\Signer\GetSignerRequest $request): \Perfumer\Microservices\Sed\Response\Signer\GetSignerResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Signer\GetSignerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Signer\GetSignerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'signer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signer = $item;
        }

        return $response;
    }

    public function upsertSigner(\Perfumer\Microservices\Sed\Request\Signer\UpsertSignerRequest $request): \Perfumer\Microservices\Sed\Response\Signer\UpsertSignerResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Signer\UpsertSignerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Signer\UpsertSignerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'signer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signer = $item;
        }

        return $response;
    }

    public function deleteSigner(\Perfumer\Microservices\Sed\Request\Signer\DeleteSignerRequest $request): \Perfumer\Microservices\Sed\Response\Signer\DeleteSignerResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Signer\DeleteSignerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Signer\DeleteSignerResponse());

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Sed\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Sed\Response\Modules\GetModulesResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Modules\GetModulesResponse());
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

    public function getModule(\Perfumer\Microservices\Sed\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Sed\Response\Module\GetModuleResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Module\GetModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function saveModule(\Perfumer\Microservices\Sed\Request\Module\SaveModuleRequest $request): \Perfumer\Microservices\Sed\Response\Module\SaveModuleResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Module\SaveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Module\SaveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function updateModule(\Perfumer\Microservices\Sed\Request\Module\UpdateModuleRequest $request): \Perfumer\Microservices\Sed\Response\Module\UpdateModuleResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Module\UpdateModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Module\UpdateModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Sed\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Sed\Response\Module\DeleteModuleResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Module\DeleteModuleResponse());

        return $response;
    }

    public function getSettings(\Perfumer\Microservices\Sed\Request\Settings\GetSettingsRequest $request): \Perfumer\Microservices\Sed\Response\Settings\GetSettingsResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Settings\GetSettingsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Settings\GetSettingsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'sed');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->sed = $item;
        }

        return $response;
    }

    public function saveSettings(\Perfumer\Microservices\Sed\Request\Settings\SaveSettingsRequest $request): \Perfumer\Microservices\Sed\Response\Settings\SaveSettingsResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Settings\SaveSettingsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Settings\SaveSettingsResponse());

        return $response;
    }

    public function getFields(\Perfumer\Microservices\Sed\Request\Fields\GetFieldsRequest $request): \Perfumer\Microservices\Sed\Response\Fields\GetFieldsResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Fields\GetFieldsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Fields\GetFieldsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'fields');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->fields = $item;
        }

        return $response;
    }

    public function getSignConstraints(\Perfumer\Microservices\Sed\Request\SignConstraints\GetSignConstraintsRequest $request): \Perfumer\Microservices\Sed\Response\SignConstraints\GetSignConstraintsResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\SignConstraints\GetSignConstraintsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\SignConstraints\GetSignConstraintsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'sign_constraints');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->sign_constraints = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'signConstraints');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signConstraints = $item;
        }

        return $response;
    }

    public function getSignConstraint(\Perfumer\Microservices\Sed\Request\SignConstraint\GetSignConstraintRequest $request): \Perfumer\Microservices\Sed\Response\SignConstraint\GetSignConstraintResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\SignConstraint\GetSignConstraintResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\SignConstraint\GetSignConstraintResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'signConstraint');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signConstraint = $item;
        }

        return $response;
    }

    public function saveSignConstraint(\Perfumer\Microservices\Sed\Request\SignConstraint\SaveSignConstraintRequest $request): \Perfumer\Microservices\Sed\Response\SignConstraint\SaveSignConstraintResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\SignConstraint\SaveSignConstraintResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\SignConstraint\SaveSignConstraintResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'signConstraint');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signConstraint = $item;
        }

        return $response;
    }

    public function updateSignConstraint(\Perfumer\Microservices\Sed\Request\SignConstraint\UpdateSignConstraintRequest $request): \Perfumer\Microservices\Sed\Response\SignConstraint\UpdateSignConstraintResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\SignConstraint\UpdateSignConstraintResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\SignConstraint\UpdateSignConstraintResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'signConstraint');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signConstraint = $item;
        }

        return $response;
    }

    public function deleteSignConstraint(\Perfumer\Microservices\Sed\Request\SignConstraint\DeleteSignConstraintRequest $request): \Perfumer\Microservices\Sed\Response\SignConstraint\DeleteSignConstraintResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\SignConstraint\DeleteSignConstraintResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\SignConstraint\DeleteSignConstraintResponse());

        return $response;
    }

    public function getDocumentTickets(\Perfumer\Microservices\Sed\Request\DocumentTickets\GetDocumentTicketsRequest $request): \Perfumer\Microservices\Sed\Response\DocumentTickets\GetDocumentTicketsResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\DocumentTickets\GetDocumentTicketsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\DocumentTickets\GetDocumentTicketsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document_tickets');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document_tickets = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'documentTickets');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->documentTickets = $item;
        }

        return $response;
    }

    public function getDocumentTicket(\Perfumer\Microservices\Sed\Request\DocumentTicket\GetDocumentTicketRequest $request): \Perfumer\Microservices\Sed\Response\DocumentTicket\GetDocumentTicketResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\DocumentTicket\GetDocumentTicketResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\DocumentTicket\GetDocumentTicketResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'document_ticket');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->document_ticket = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'documentTicket');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->documentTicket = $item;
        }

        return $response;
    }

    public function saveDocumentTicket(\Perfumer\Microservices\Sed\Request\DocumentTicket\SaveDocumentTicketRequest $request): \Perfumer\Microservices\Sed\Response\DocumentTicket\SaveDocumentTicketResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\DocumentTicket\SaveDocumentTicketResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\DocumentTicket\SaveDocumentTicketResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'documentTicket');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->documentTicket = $item;
        }

        return $response;
    }

    public function deleteDocumentTicket(\Perfumer\Microservices\Sed\Request\DocumentTicket\DeleteDocumentTicketRequest $request): \Perfumer\Microservices\Sed\Response\DocumentTicket\DeleteDocumentTicketResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\DocumentTicket\DeleteDocumentTicketResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\DocumentTicket\DeleteDocumentTicketResponse());

        return $response;
    }

    public function getHealthcheck(\Perfumer\Microservices\Sed\Request\Healthcheck\GetHealthcheckRequest $request): \Perfumer\Microservices\Sed\Response\Healthcheck\GetHealthcheckResponse
    {
        /** @var \Perfumer\Microservices\Sed\Response\Healthcheck\GetHealthcheckResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Sed\Response\Healthcheck\GetHealthcheckResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'healthcheck');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->healthcheck = $item;
        }

        return $response;
    }
}
