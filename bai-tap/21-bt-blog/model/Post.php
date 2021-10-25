<?php

namespace Model;

class Post
{
    public $id;
    public $title;
    public $teaser;
    public $content;
    public $created;

    /**
     * @param $id
     * @param $title
     * @param $teaser
     * @param $content
     * @param $created
     */
    public function __construct($title, $teaser, $content, $created)
    {
        $this->title = $title;
        $this->teaser = $teaser;
        $this->content = $content;
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }


}