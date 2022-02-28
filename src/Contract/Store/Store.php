<?php

namespace Perfumer\Microservices\Contract\Store;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpsertModel;

/**
 * @GetModels(microservice="store", model="clients", fields={"email", "phone", "domain", "full_name", "server_ip", "is_manual_mode.bool"})
 * @GetModel(microservice="store", model="client", fields={"id.int", "token"})
 * @CreateModel(microservice="store", model="client", fields={"email", "phone", "domain", "full_name", "server_ip", "is_manual_mode.bool"})
 * @UpdateModel(microservice="store", model="client", fields={"id.int", "email", "phone", "domain", "full_name", "server_ip", "is_manual_mode.bool"})
 * @DeleteModel(microservice="store", model="client", fields={"id.int"})
 *
 * @GetModel(microservice="store", model="extension", fields={"id.int", "code"})
 * @GetModels(microservice="store", model="extensions", fields={
 *     "token", "title", "image", "code", "composer_name", "description", "locale", "repository_url", "repository_type", "package_name"
 * })
 * @CreateModel(microservice="store", model="extension", fields={
 *     "id.int", "title", "image", "code", "composer_name", "description", "locale", "repository_url", "repository_type", "package_name", "depend"
 * })
 * @UpdateModel(microservice="store", model="extension", fields={
 *     "id.int", "title", "image", "code", "composer_name", "description", "locale", "repository_url", "repository_type", "package_name", "depend"
 * })
 * @DeleteModel(microservice="store", model="extension", fields={"id.int", "code"})
 *
 * @SaveModel(microservice="store", model="extensionVersion", fields={
 *     "extension", "version_title", "version_code", "next_version", "min_platform_version"
 * })
 *
 * @GetModels(microservice="store", model="client", submodel="ClientExtensions", url="/client/extensions", fields={"client", "title", "description", "locale"}, response_fields={"extensions"})
 * @SaveModel(microservice="store", model="client", submodel="ClientExtension", url="/client/extension", fields={"client", "extension", "branch"})
 * @SaveModel(microservice="store", model="client", url="/client/upgrade", fields={"client"}, action="upgrade")
 * @UpsertModel(microservice="store", model="client", submodel="ClientExtension", url="/client/extension", fields={"client", "extension"}, action="reinstall")
 * @UpdateModel(microservice="store", model="client", submodel="ClientExtension", url="/client/extension", fields={"client", "extension", "branch"}, action="upgrade")
 * @DeleteModel(microservice="store", model="client", submodel="ClientExtension", url="/client/extension", fields={"client", "extension"})
 *
 * @UpdateModel(microservice="store", model="client", submodel="ClientCluster", url="/client/cluster", fields={"id.int", "token"}, request_method="post")
 * @UpdateModel(microservice="store", model="client", submodel="ClientHost", url="/client/host", fields={"id.int", "token"}, request_method="post")
 * @UpdateModel(microservice="store", model="client", action="sync", submodel="ClientExtensions", url="/client/sync", fields={"client", "extensions"}, request_method="post")
 * @CreateModel(microservice="store", model="deployment", fields={"code", "client"})
 *
 * @GetModels(microservice="store", model="platforms", fields={"version_title", "version_code"})
 * @GetModel(microservice="store", model="platform", fields={"id.int"})
 * @CreateModel(microservice="store", model="platform", fields={"version_title", "version_code", "next_version", "clients.array"})
 * @UpdateModel(microservice="store", model="platform", fields={"id.int", "version_title", "version_code", "next_version", "clients.array"})
 * @DeleteModel(microservice="store", model="platform", fields={"id.int"})
 *
 * @GetModels(microservice="store", model="extension", submodel="ExtensionVersions", url="/extension/versions", fields={"extension", "version_title", "version_code"}, response_fields={"extension_versions.array"})
 *
 * @GetModel(microservice="store", model="cloudUser", fields={"id.int", "code"}, response_fields={"cloud_user"}, url="/cloud/user")
 * @DeleteModel(microservice="store", model="cloudUser", fields={"id.int", "code", "force.bool"}, url="/cloud/user")
 * @CreateModel(microservice="store", model="cloudUser", fields={"cloud", "first_name", "last_name", "mid_name", "email", "phone", "subdomain", "password", "pg_database", "iin", "bin", "code", "is_protected.bool", "silent.bool"}, response_fields={"cloud_user"}, url="/cloud/user")
 * @UpdateModel(microservice="store", model="cloudUser", fields={"id.int", "first_name", "last_name", "mid_name", "email", "phone", "password", "iin", "bin", "code", "is_protected.bool"}, response_fields={"cloud_user"}, url="/cloud/user")
 * @GetModels(microservice="store", model="cloudUsers", fields={"id.int", "first_name", "last_name", "mid_name", "email", "phone", "subdomain", "password", "pg_database", "iin", "bin", "code", "is_protected.bool"}, response_fields={"cloud_users"}, url="/cloud/user")
 * @CreateModel(microservice="store", model="cloudUser", fields={"cloud", "first_name", "last_name", "mid_name", "email", "phone", "subdomain", "password", "pg_database", "iin", "bin", "code"}, url="/cloud/user/validate", action="validate")
 *
 * @GetModel(microservice="store", model="cloudUser", fields={"version_code.int", "image", "cloud"}, submodel="UnmigratedCloudUser", response_fields={"cloud_user.array"}, url="/cloud/user/unmigrated")
 * @CreateModel(microservice="store", model="cloudUser", fields={"version_code.int", "image", "id.int"}, action="migrate", url="/cloud/user/migrate")
 */
interface Store
{
}