<?php


namespace Perfumer\Microservices\Feed;

class Record
{

    /**
     * @var string|null $collection
     */
    public ?string $collection = null;

    /**
     * @var int|null $id
     */
    public ?int $id = null;

    /**
     * @var string|null $recipient
     */
    public ?string $recipient = null;

    /**
     * @var string|null $sender
     */
    public ?string $sender = null;

    /**
     * @var string|null $thread
     */
    public ?string $thread = null;

    /**
     * @var string|null $title
     */
    public ?string $title = null;

    /**
     * @var string|null $text
     */
    public ?string $text = null;

    /**
     * @var string|null $image
     */
    public ?string $image = null;

    /**
     * @var array|null|string $payload
     */
    public $payload = [];

    /**
     * YYYY-mm-dd HH:ii:ss.m | DateTime
     * @var string|\DateTime $created_at
     */
    public $created_at;

    /**
     * @var bool $is_read
     */
    public bool $is_read = false;

    public function __construct()
    {
        $this->setCreatedAt((new \DateTime()));
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRecipient()
    {
        return $this->recipient;
    }

    public function getSender()
    {
        return $this->sender;
    }

    public function getThread()
    {
        return $this->thread;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function getCollection()
    {
        return $this->collection;
    }

    public function getIsRead()
    {
        return $this->is_read;
    }

    public function isViewed()
    {
        return (bool)$this->is_read;
    }

    public function getCreatedAt($format = null)
    {
        if(!$this->created_at){
            return null;
        }

        $date_time = is_string($this->created_at) ? new \DateTime($this->created_at) : $this->created_at;

        return $format ? $date_time->format($format) : $date_time;
    }

    public function setId(?int $val)
    {
        $this->id = $val;
    }

    public function setRecipient(?string $val)
    {
        $this->recipient = $val;
    }

    public function setSender(?string $val)
    {
        $this->sender = $val;
    }

    public function setThread(?string $val)
    {
        $this->thread = $val;
    }

    public function setTitle(?string $val)
    {
        $this->title = $val;
    }

    public function setText(?string $val)
    {
        $this->text = $val;
    }

    public function setImage(?string $val)
    {
        $this->image = $val;
    }

    public function setPayload($val)
    {
        if(is_string($val)){
            $val = json_decode($val, true);
        }

        $this->payload = $val;
    }

    public function addPayload($val, $key = null)
    {
        if($key) {
            $this->payload[$key] = $val;
        }else{
            $this->payload[] = $val;
        }
    }

    public function removePayload($key)
    {
        if(array_key_exists($key, $this->payload)){
            unset($this->payload[$key]);
        }
    }

    public function setCreatedAt($val)
    {
        $this->created_at = $val;
    }

    public function setCollection(?string $val)
    {
        $this->collection = $val;
    }

    public function setIsRead(?bool $val)
    {
        $this->is_read = (bool)$val;
    }

    public function setFromArray(?array $data)
    {
        if(!$data){
            return;
        }

        $keys = array_fill_keys([
            'id',
            'recipient',
            'sender',
            'thread',
            'title',
            'text',
            'image',
            'payload',
            'collection',
            'created_at',
            'is_read',
        ], null);

        $data = array_intersect_key($data, $keys);

        if(array_key_exists('payload', $data)) {
            $this->setPayload($data['payload']);
        }
        if(array_key_exists('id', $data)) {
            $this->setId($data['id']);
        }
        if(array_key_exists('image', $data)) {
            $this->setImage($data['image']);
        }
        if(array_key_exists('recipient', $data)) {
            $this->setRecipient($data['recipient']);
        }
        if(array_key_exists('thread', $data)) {
            $this->setThread($data['thread']);
        }
        if(array_key_exists('title', $data)) {
            $this->setTitle($data['title']);
        }
        if(array_key_exists('text', $data)) {
            $this->setText($data['text']);
        }
        if(array_key_exists('sender', $data)) {
            $this->setSender($data['sender']);
        }
        if(array_key_exists('collection', $data)) {
            $this->setCollection($data['collection']);
        }
        if(array_key_exists('created_at', $data)) {
            $this->setCreatedAt($data['created_at']);
        }
        if(array_key_exists('is_read', $data)) {
            $this->setIsRead($data['is_read']);
        }
    }

    public function getToArray()
    {
        return [
            'id' => $this->getId(),
            'recipient' => $this->getRecipient(),
            'sender' => $this->getSender(),
            'thread' => $this->getThread(),
            'title' => $this->getTitle(),
            'text' => $this->getText(),
            'image' => $this->getImage(),
            'payload' => $this->getPayload(),
            'collection' => $this->getCollection(),
            'created_at' => $this->getCreatedAt(),
            'is_read' => $this->getIsRead(),
        ];
    }
}