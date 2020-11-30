<?php

namespace Perfumer\Microservices\Contract;

use Perfumer\Microservices\Pages\Request\GetModulesRequest;
use Perfumer\Microservices\Pages\Request\SaveModuleRequest;
use Perfumer\Microservices\Pages\Response\GetModulesResponse;
use Perfumer\Microservices\Pages\Response\SaveModuleResponse;

interface Pages
{
    public function getModules(GetModulesRequest $request): GetModulesResponse;

    public function saveModule(SaveModuleRequest $request): SaveModuleResponse;
}
