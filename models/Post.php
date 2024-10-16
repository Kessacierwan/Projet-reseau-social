<?php

class Post extends PostRepository
{
    private $id;
    private $title;
    private $content;
    private $userId;

    public function __construct($id, $title, $content, $userId)
    {
        $this -> id=$id;
        $this ->title = $title;
        $this ->content = $content;
        $this -> userId= $userId;

        
    }

    public function setId($id)
    {
        $this->id  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function settitle($title)
    {
        $this->title = $title;
    }

    public function gettitle()
    {
        return $this->title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }
}

