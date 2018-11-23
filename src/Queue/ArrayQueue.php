<?php

namespace Algo\Queue;

/**
 * 用数组实现的队列
 *
 * Class ArrayQueue
 *
 * @package Algo\Queue
 *
 */
class ArrayQueue
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
        if ($this->tail == $this->n) {
            return false;
        }
        $this->items[$this->tail] = $item;

        $this->tail++;

        return true;
    }

    // 出队
    public function dequeue()
    {
        if ($this->head === $this->tail) {
            return null;
        } else {
            $ret = $this->items[$this->head];
            $this->head++;

            return $ret;
        }
    }

    public function printAll()
    {
        for ($i = $this->head; $i < $this->tail; $i++) {
            echo $this->items[$i] . PHP_EOL;
        }
    }

}