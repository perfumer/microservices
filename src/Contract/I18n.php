<?php

namespace Perfumer\Microservices\Contract;

use Perfumer\Microservices\I18n\Request\DeleteTranslationRequest;
use Perfumer\Microservices\I18n\Request\GetTranslationRequest;
use Perfumer\Microservices\I18n\Request\GetTranslationsRequest;
use Perfumer\Microservices\I18n\Request\SaveTranslationRequest;
use Perfumer\Microservices\I18n\Response\DeleteTranslationResponse;
use Perfumer\Microservices\I18n\Response\GetTranslationResponse;
use Perfumer\Microservices\I18n\Response\GetTranslationsResponse;
use Perfumer\Microservices\I18n\Response\SaveTranslationResponse;

interface I18n
{
    public function getTranslation(GetTranslationRequest $request): GetTranslationResponse;

    public function saveTranslation(SaveTranslationRequest $request): SaveTranslationResponse;

    public function deleteTranslation(DeleteTranslationRequest $request): DeleteTranslationResponse;

    public function getTranslations(GetTranslationsRequest $request): GetTranslationsResponse;
}
