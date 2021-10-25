<?php


class Queue
{
    protected array $queue;
    protected int $size;

    public function __construct()
    {
        $this->queue = [];
        $this->size = 0;
    }

    public function enqueue($element)
    {
        array_push($this->queue, $element);
        $this->size++;
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            $dequeueItem = "QUEUE IS EMPTY!";
        } else {
            $this->size--;
            $dequeueItem = array_shift($this->queue);
        }
        return $dequeueItem;
    }

    public function isEmpty(): bool
    {
        return empty($this->queue);
    }
}