<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class GetItemRequest extends Request
{
    /**
     * @var string|null $collection
     */
    public ?string $collection = null;
    /**
     * @var string|null $badge_user
     */
    public ?string $badge_user = null;
    /**
     * @var string|null $recipient
     */
    public ?string $recipient = null;
    /**
     * @var string|null $sender
     */
    public ?string $sender = null;
    /**
     * @var int|null $id
     */
    public ?int $id = null;
}