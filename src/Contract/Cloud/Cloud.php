<?php

namespace Perfumer\Microservices\Contract\Cloud;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;

/**
 * @GetModel(microservice="cloud", model="instance", fields={"id.int", "code"})
 * @DeleteModel(microservice="cloud", model="instance", fields={"id.int", "code", "force.bool"})
 * @CreateModel(microservice="cloud", model="instance", fields={"first_name", "last_name", "mid_name", "username", "email", "phone", "subdomain", "password", "iin", "bin", "org_name", "code", "silent.bool"})
 * @UpdateModel(microservice="cloud", model="instance", fields={"id.int", "first_name", "last_name", "mid_name", "username", "email", "phone", "password", "iin", "bin", "org_name", "code"})
 * @GetModels(microservice="cloud", model="instances", fields={"id", "first_name", "last_name", "mid_name", "username", "email", "phone", "subdomain", "iin", "bin", "org_name", "code"})
 * @CreateModel(microservice="cloud", model="instance", fields={"first_name", "last_name", "mid_name", "username", "email", "phone", "subdomain", "password", "iin", "bin", "org_name"}, url="/instance/validate", action="validate")
 * @GetModels(microservice="cloud", model="customers", fields={"id.array", "last_name", "first_name", "mid_name", "full_name", "email", "phone", "iin", "bin", "iin_bin", "code", "created_at_from", "created_at_to", "updated_at_from", "updated_at_to"})
 *
 * @GetModel(microservice="cloud", model="instance", fields={"segment"}, submodel="InstanceConnection", url="/instance/connection")
 * @GetModel(microservice="cloud", model="instance", fields={"version_code.int", "image"}, submodel="UnmigratedInstance", url="/instance/unmigrated")
 * @CreateModel(microservice="cloud", model="instance", fields={"version_code.int", "image", "id.int"}, action="migrate", url="/instance/migrate")
 */
interface Cloud
{
}