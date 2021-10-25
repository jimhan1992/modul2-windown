<?php

class Node
{
    public $data;
    public $next;

    /**
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

    function readNode()
    {
        return $this->data;
    }

}