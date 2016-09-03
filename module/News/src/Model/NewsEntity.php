<?php

namespace News\Model;

class NewsEntity
{
    public $id;
    public $title;
    public $content;
    public $author;
    public $datetime;
    
    public function exchangeArray(array $data)
    {
        $this->id = $data['id'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->content = $data['content'] ?? null;
        $this->author = $data['author'] ?? null;
        $this->datetime = $data['datetime'] ?? null;
    }
}
?>
