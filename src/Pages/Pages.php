<?php /** @noinspection PhpIncompatibleReturnTypeInspection */

namespace Perfumer\Microservices\Pages;

use Perfumer\Microservices\Microservice;
use Perfumer\Microservices\Pages\Request\GetModulesRequest;
use Perfumer\Microservices\Pages\Request\SaveModuleRequest;
use Perfumer\Microservices\Pages\Response\GetModulesResponse;
use Perfumer\Microservices\Pages\Response\SaveModuleResponse;

class Pages extends Microservice implements \Perfumer\Microservices\Contract\Pages
{
    public function __construct($host)
    {
        $this->host = $host;
    }

    public function getModules(GetModulesRequest $request): GetModulesResponse
    {
        $url = '/modules';

        $response = $this->doRequest(new GetModulesResponse(), 'get', $url);

        $array = $this->fetchKeyFromContent($response->content, 'modules');

        $response->modules = $array;

        return $response;
    }

    public function saveModule(SaveModuleRequest $request): SaveModuleResponse
    {
        $url = '/module';

        $response = $this->doRequest(new SaveModuleResponse(), 'post', $url, [
            'name' => $request->name,
            'code' => $request->code,
            'parents' => $request->parents,
            'children' => $request->children,
        ]);
        return $response;
    }
}
