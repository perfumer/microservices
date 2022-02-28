<?php

namespace Generated\Perfumer\Microservices\Store;

abstract class Store extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Store\Store
{
    public function getClients(\Perfumer\Microservices\Store\Request\Clients\GetClientsRequest $request): \Perfumer\Microservices\Store\Response\Clients\GetClientsResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Clients\GetClientsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Clients\GetClientsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'clients');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->clients = $item;
        }

        return $response;
    }

    public function getClient(\Perfumer\Microservices\Store\Request\Client\GetClientRequest $request): \Perfumer\Microservices\Store\Response\Client\GetClientResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\GetClientResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\GetClientResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function createClient(\Perfumer\Microservices\Store\Request\Client\CreateClientRequest $request): \Perfumer\Microservices\Store\Response\Client\CreateClientResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\CreateClientResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\CreateClientResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function updateClient(\Perfumer\Microservices\Store\Request\Client\UpdateClientRequest $request): \Perfumer\Microservices\Store\Response\Client\UpdateClientResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\UpdateClientResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\UpdateClientResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function deleteClient(\Perfumer\Microservices\Store\Request\Client\DeleteClientRequest $request): \Perfumer\Microservices\Store\Response\Client\DeleteClientResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\DeleteClientResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\DeleteClientResponse());

        return $response;
    }

    public function getExtension(\Perfumer\Microservices\Store\Request\Extension\GetExtensionRequest $request): \Perfumer\Microservices\Store\Response\Extension\GetExtensionResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Extension\GetExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Extension\GetExtensionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'extension');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extension = $item;
        }

        return $response;
    }

    public function getExtensions(\Perfumer\Microservices\Store\Request\Extensions\GetExtensionsRequest $request): \Perfumer\Microservices\Store\Response\Extensions\GetExtensionsResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Extensions\GetExtensionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Extensions\GetExtensionsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'extensions');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extensions = $item;
        }

        return $response;
    }

    public function createExtension(\Perfumer\Microservices\Store\Request\Extension\CreateExtensionRequest $request): \Perfumer\Microservices\Store\Response\Extension\CreateExtensionResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Extension\CreateExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Extension\CreateExtensionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'extension');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extension = $item;
        }

        return $response;
    }

    public function updateExtension(\Perfumer\Microservices\Store\Request\Extension\UpdateExtensionRequest $request): \Perfumer\Microservices\Store\Response\Extension\UpdateExtensionResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Extension\UpdateExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Extension\UpdateExtensionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'extension');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extension = $item;
        }

        return $response;
    }

    public function deleteExtension(\Perfumer\Microservices\Store\Request\Extension\DeleteExtensionRequest $request): \Perfumer\Microservices\Store\Response\Extension\DeleteExtensionResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Extension\DeleteExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Extension\DeleteExtensionResponse());

        return $response;
    }

    public function saveExtensionVersion(\Perfumer\Microservices\Store\Request\ExtensionVersion\SaveExtensionVersionRequest $request): \Perfumer\Microservices\Store\Response\ExtensionVersion\SaveExtensionVersionResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\ExtensionVersion\SaveExtensionVersionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\ExtensionVersion\SaveExtensionVersionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'extensionVersion');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extensionVersion = $item;
        }

        return $response;
    }

    public function getClientExtensions(\Perfumer\Microservices\Store\Request\Client\GetClientExtensionsRequest $request): \Perfumer\Microservices\Store\Response\Client\GetClientExtensionsResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\GetClientExtensionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\GetClientExtensionsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'extensions');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extensions = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function saveClientExtension(\Perfumer\Microservices\Store\Request\Client\SaveClientExtensionRequest $request): \Perfumer\Microservices\Store\Response\Client\SaveClientExtensionResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\SaveClientExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\SaveClientExtensionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function upgradeClient(\Perfumer\Microservices\Store\Request\Client\UpgradeClientRequest $request): \Perfumer\Microservices\Store\Response\Client\UpgradeClientResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\UpgradeClientResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\UpgradeClientResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function reinstallClientExtension(\Perfumer\Microservices\Store\Request\Client\ReinstallClientExtensionRequest $request): \Perfumer\Microservices\Store\Response\Client\ReinstallClientExtensionResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\ReinstallClientExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\ReinstallClientExtensionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function upgradeClientExtension(\Perfumer\Microservices\Store\Request\Client\UpgradeClientExtensionRequest $request): \Perfumer\Microservices\Store\Response\Client\UpgradeClientExtensionResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\UpgradeClientExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\UpgradeClientExtensionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function deleteClientExtension(\Perfumer\Microservices\Store\Request\Client\DeleteClientExtensionRequest $request): \Perfumer\Microservices\Store\Response\Client\DeleteClientExtensionResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\DeleteClientExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\DeleteClientExtensionResponse());

        return $response;
    }

    public function updateClientCluster(\Perfumer\Microservices\Store\Request\Client\UpdateClientClusterRequest $request): \Perfumer\Microservices\Store\Response\Client\UpdateClientClusterResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\UpdateClientClusterResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\UpdateClientClusterResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function updateClientHost(\Perfumer\Microservices\Store\Request\Client\UpdateClientHostRequest $request): \Perfumer\Microservices\Store\Response\Client\UpdateClientHostResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\UpdateClientHostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\UpdateClientHostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function syncClientExtensions(\Perfumer\Microservices\Store\Request\Client\SyncClientExtensionsRequest $request): \Perfumer\Microservices\Store\Response\Client\SyncClientExtensionsResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Client\SyncClientExtensionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Client\SyncClientExtensionsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'client');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->client = $item;
        }

        return $response;
    }

    public function createDeployment(\Perfumer\Microservices\Store\Request\Deployment\CreateDeploymentRequest $request): \Perfumer\Microservices\Store\Response\Deployment\CreateDeploymentResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Deployment\CreateDeploymentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Deployment\CreateDeploymentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'deployment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->deployment = $item;
        }

        return $response;
    }

    public function getPlatforms(\Perfumer\Microservices\Store\Request\Platforms\GetPlatformsRequest $request): \Perfumer\Microservices\Store\Response\Platforms\GetPlatformsResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Platforms\GetPlatformsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Platforms\GetPlatformsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'platforms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->platforms = $item;
        }

        return $response;
    }

    public function getPlatform(\Perfumer\Microservices\Store\Request\Platform\GetPlatformRequest $request): \Perfumer\Microservices\Store\Response\Platform\GetPlatformResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Platform\GetPlatformResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Platform\GetPlatformResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'platform');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->platform = $item;
        }

        return $response;
    }

    public function createPlatform(\Perfumer\Microservices\Store\Request\Platform\CreatePlatformRequest $request): \Perfumer\Microservices\Store\Response\Platform\CreatePlatformResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Platform\CreatePlatformResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Platform\CreatePlatformResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'platform');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->platform = $item;
        }

        return $response;
    }

    public function updatePlatform(\Perfumer\Microservices\Store\Request\Platform\UpdatePlatformRequest $request): \Perfumer\Microservices\Store\Response\Platform\UpdatePlatformResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Platform\UpdatePlatformResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Platform\UpdatePlatformResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'platform');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->platform = $item;
        }

        return $response;
    }

    public function deletePlatform(\Perfumer\Microservices\Store\Request\Platform\DeletePlatformRequest $request): \Perfumer\Microservices\Store\Response\Platform\DeletePlatformResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Platform\DeletePlatformResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Platform\DeletePlatformResponse());

        return $response;
    }

    public function getExtensionVersions(\Perfumer\Microservices\Store\Request\Extension\GetExtensionVersionsRequest $request): \Perfumer\Microservices\Store\Response\Extension\GetExtensionVersionsResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\Extension\GetExtensionVersionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\Extension\GetExtensionVersionsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'extension_versions');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extension_versions = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'extension');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extension = $item;
        }

        return $response;
    }

    public function getCloudUser(\Perfumer\Microservices\Store\Request\CloudUser\GetCloudUserRequest $request): \Perfumer\Microservices\Store\Response\CloudUser\GetCloudUserResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\CloudUser\GetCloudUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\CloudUser\GetCloudUserResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'cloud_user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloud_user = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'cloudUser');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloudUser = $item;
        }

        return $response;
    }

    public function deleteCloudUser(\Perfumer\Microservices\Store\Request\CloudUser\DeleteCloudUserRequest $request): \Perfumer\Microservices\Store\Response\CloudUser\DeleteCloudUserResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\CloudUser\DeleteCloudUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\CloudUser\DeleteCloudUserResponse());

        return $response;
    }

    public function createCloudUser(\Perfumer\Microservices\Store\Request\CloudUser\CreateCloudUserRequest $request): \Perfumer\Microservices\Store\Response\CloudUser\CreateCloudUserResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\CloudUser\CreateCloudUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\CloudUser\CreateCloudUserResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'cloud_user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloud_user = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'cloudUser');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloudUser = $item;
        }

        return $response;
    }

    public function updateCloudUser(\Perfumer\Microservices\Store\Request\CloudUser\UpdateCloudUserRequest $request): \Perfumer\Microservices\Store\Response\CloudUser\UpdateCloudUserResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\CloudUser\UpdateCloudUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\CloudUser\UpdateCloudUserResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'cloud_user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloud_user = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'cloudUser');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloudUser = $item;
        }

        return $response;
    }

    public function getCloudUsers(\Perfumer\Microservices\Store\Request\CloudUsers\GetCloudUsersRequest $request): \Perfumer\Microservices\Store\Response\CloudUsers\GetCloudUsersResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\CloudUsers\GetCloudUsersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\CloudUsers\GetCloudUsersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'cloud_users');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloud_users = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'cloudUsers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloudUsers = $item;
        }

        return $response;
    }

    public function validateCloudUser(\Perfumer\Microservices\Store\Request\CloudUser\ValidateCloudUserRequest $request): \Perfumer\Microservices\Store\Response\CloudUser\ValidateCloudUserResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\CloudUser\ValidateCloudUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\CloudUser\ValidateCloudUserResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'cloudUser');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloudUser = $item;
        }

        return $response;
    }

    public function getUnmigratedCloudUser(\Perfumer\Microservices\Store\Request\CloudUser\GetUnmigratedCloudUserRequest $request): \Perfumer\Microservices\Store\Response\CloudUser\GetUnmigratedCloudUserResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\CloudUser\GetUnmigratedCloudUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\CloudUser\GetUnmigratedCloudUserResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'cloud_user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloud_user = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'cloudUser');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloudUser = $item;
        }

        return $response;
    }

    public function migrateCloudUser(\Perfumer\Microservices\Store\Request\CloudUser\MigrateCloudUserRequest $request): \Perfumer\Microservices\Store\Response\CloudUser\MigrateCloudUserResponse
    {
        /** @var \Perfumer\Microservices\Store\Response\CloudUser\MigrateCloudUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Store\Response\CloudUser\MigrateCloudUserResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'cloudUser');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->cloudUser = $item;
        }

        return $response;
    }
}
