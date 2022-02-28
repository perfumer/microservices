<?php

namespace Generated\Perfumer\Microservices\I18n;

abstract class I18n extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\I18n\I18n
{
    public function getTranslation(\Perfumer\Microservices\I18n\Request\Translation\GetTranslationRequest $request): \Perfumer\Microservices\I18n\Response\Translation\GetTranslationResponse
    {
        /** @var \Perfumer\Microservices\I18n\Response\Translation\GetTranslationResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\I18n\Response\Translation\GetTranslationResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'translation');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translation = $item;
        }

        return $response;
    }

    public function deleteTranslation(\Perfumer\Microservices\I18n\Request\Translation\DeleteTranslationRequest $request): \Perfumer\Microservices\I18n\Response\Translation\DeleteTranslationResponse
    {
        /** @var \Perfumer\Microservices\I18n\Response\Translation\DeleteTranslationResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\I18n\Response\Translation\DeleteTranslationResponse());

        return $response;
    }

    public function createTranslation(\Perfumer\Microservices\I18n\Request\Translation\CreateTranslationRequest $request): \Perfumer\Microservices\I18n\Response\Translation\CreateTranslationResponse
    {
        /** @var \Perfumer\Microservices\I18n\Response\Translation\CreateTranslationResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\I18n\Response\Translation\CreateTranslationResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'translation');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translation = $item;
        }

        return $response;
    }

    public function updateTranslation(\Perfumer\Microservices\I18n\Request\Translation\UpdateTranslationRequest $request): \Perfumer\Microservices\I18n\Response\Translation\UpdateTranslationResponse
    {
        /** @var \Perfumer\Microservices\I18n\Response\Translation\UpdateTranslationResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\I18n\Response\Translation\UpdateTranslationResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'translation');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translation = $item;
        }

        return $response;
    }

    public function saveTranslations(\Perfumer\Microservices\I18n\Request\Translations\SaveTranslationsRequest $request): \Perfumer\Microservices\I18n\Response\Translations\SaveTranslationsResponse
    {
        /** @var \Perfumer\Microservices\I18n\Response\Translations\SaveTranslationsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\I18n\Response\Translations\SaveTranslationsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'translations');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translations = $item;
        }

        return $response;
    }

    public function dumpTranslations(\Perfumer\Microservices\I18n\Request\Translations\DumpTranslationsRequest $request): \Perfumer\Microservices\I18n\Response\Translations\DumpTranslationsResponse
    {
        /** @var \Perfumer\Microservices\I18n\Response\Translations\DumpTranslationsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\I18n\Response\Translations\DumpTranslationsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'translations');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translations = $item;
        }

        return $response;
    }

    public function getTranslations(\Perfumer\Microservices\I18n\Request\Translations\GetTranslationsRequest $request): \Perfumer\Microservices\I18n\Response\Translations\GetTranslationsResponse
    {
        /** @var \Perfumer\Microservices\I18n\Response\Translations\GetTranslationsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\I18n\Response\Translations\GetTranslationsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_translations');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_translations = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'translations');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translations = $item;
        }

        return $response;
    }
}
