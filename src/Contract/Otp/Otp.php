<?php

namespace Perfumer\Microservices\Contract\Otp;

use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\SaveModel;

/**
 * @GetModel(microservice="otp", model="sms", fields={"phone", "password"}, url="/sms/check")
 * @SaveModel(microservice="otp", model="sms", fields={"ip", "phone", "password", "message", "lifetime"})
 * @SaveModel(microservice="otp", model="call", fields={"ip", "phone", "password", "lifetime"})
 * @SaveModel(microservice="otp", model="sms", submodel="LimitPhone", fields={"ips", "phones"}, url="/limit/sms")
 * @SaveModel(microservice="otp", model="call", submodel="LimitPhoneCall", fields={"ips", "phones"}, url="/limit/call")
 * @GetModel(microservice="otp", model="email", fields={"email", "password"}, url="/email/check")
 * @SaveModel(microservice="otp", model="email", fields={"ip", "email", "password", "subject", "text", "html", "lifetime"})
 * @SaveModel(microservice="otp", model="email", submodel="LimitEmails", fields={"ips", "emails"}, url="/limit/emails")
 */
interface Otp
{

}