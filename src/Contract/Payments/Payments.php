<?php

namespace Perfumer\Microservices\Contract\Payments;

use Perfumer\Microservices\Annotation\CreateModel;

/**
 * @CreateModel(microservice="payments", model="purchase", action="cart", url="/cart", fields={"sum.int", "user", "category", "uuid", "description", "provider", "payload.array", "init.bool", "delivery_callback", "init_success_url", "init_failure_url"}, response_fields={"frame_url"})
 * @CreateModel(microservice="payments", model="purchase", action="init", url="/init", fields={"uuid", "init_success_url", "init_failure_url"}, response_fields={"frame_url"})
 */
interface Payments
{

}