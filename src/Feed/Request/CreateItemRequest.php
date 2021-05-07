<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class CreateItemRequest extends Request
{

    /**
     * @var string|null $collection
     */
    public ?string $collection;

    /**
     * @var string|null $recipient
     */
    public ?string $recipient;

    /**
     * @var string|null $websocket_channel
     */
    public ?string $websocket_channel;

    /**
     * @var string|null $badge_user
     */
    public ?string $badge_user;

    /**
     * @var string|null $sender
     */
    public ?string $sender;

    /**
     * @var string|null $thread
     */
    public ?string $thread;

    /**
     * @var string|null $title
     */
    public ?string $title;

    /**
     * @var string|null $text
     */
    public ?string $text;

    /**
     * @var string|null $image
     */
    public ?string $image;

    /**
     * @var string|\DateTime|null $created_at
     */
    public $created_at;

    /**
     * @var array|null $payload
     */
    public ?array $payload;

    public function setFromArray(array $data)
    {
        $this->collection = $data['collection'] ?? null;
        $this->recipient = $data['recipient'] ?? null;
        $this->websocket_channel = $data['websocket_channel'] ?? null;
        $this->badge_user = $data['badge_user'] ?? null;
        $this->sender = $data['sender'] ?? null;
        $this->thread = $data['thread'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->text = $data['text'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->created_at = $data['created_at'] ?? null;
        if($this->created_at && $this->created_at instanceof \DateTime){
            $this->created_at = $this->created_at->format('Y-m-d H:i:s.u');
        }
        $this->payload = $data['payload'] ?? null;
    }
}