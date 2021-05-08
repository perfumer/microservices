<?php

namespace Perfumer\Microservices\Feed\Request\Record;

class CreateRecordRequest extends \Generated\Perfumer\Microservices\Feed\Request\Record\CreateRecordRequest
{
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
