<?php


namespace Algo\Queue;


class CircularQueue
{
    private $items;
    private $n = 0;

    private $head = 0;
    private $tail = 0;

    public function __construct(int $capacity)
    {
        $this->items = array_pad([], $capacity, '');
        $this->n = $capacity;
    }

    // 入队
    public function enqueue(string $item)
    {
        if (($this->tail + 1) % $this->n == $this->head) {
            return false;
        } else {
            $this->items[$this->tail] = $item;
            $this->tail = ($this->tail + 1) % $this->n;

            return true;
        }
    }

    // 出队
    public function dequeue()
    {
        if ($this->tail == $this->head) {
            return null;
        } else {
            $ret = $this->items[$this->head];
            $this->head = ($this->head + 1) % $this->n;
            return $ret;
        }
    }
}