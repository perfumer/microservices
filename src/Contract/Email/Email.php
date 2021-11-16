<?php

namespace Perfumer\Microservices\Contract\Email;

use Perfumer\Microservices\Annotation\CreateModel;

/**
 * @CreateModel(microservice="email", model="smtp", action="send", fields={"subject", "to", "text", "html", "signature_enabled.bool"})
 */
interface Email
{

}