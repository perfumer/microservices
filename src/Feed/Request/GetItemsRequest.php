<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class GetItemsRequest extends Request
{

    /**
     * @var string $collection
     */
    public ?string $collection = null;

    /**
     * @var string $sender
     */
    public ?string $sender = null;

    /**
     * @var string $user
     */
    public ?string $user = null;

    /**
     * @var string $thread
     */
    public ?string $thread = null;

    /**
     * @var string $recipient
     */
    public ?string $recipient = null;

    /**
     * @var string $search
     */
    public ?string $search = null;

    /**
     * @var int $id
     */
    public ?int $id = null;

    /**
     * @var int $limit
     */
    public ?int $limit = null;

    /**
     * @var int $offset
     */
    public ?int $offset = null;

    /**
     * @var string $order
     */
    public ?string $order = null;

    /**
     * @var bool $is_read
     */
    public ?bool $is_read = null;
}