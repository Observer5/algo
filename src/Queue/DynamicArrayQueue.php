<?php
namespace Algo\Queue;

/**
 * 用数组实现的动态队列
 *
 * Class ArrayQueue
 *
 * @package Algo\Queue
 *
 */
class DynamicArrayQueue
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
        if ($this->tail === $this->n) {
            if ($this->head === 0) {
                return false;
            } else {

                for ($i = $this->head; $i < $this->tail; $i++) {
                    $this->items[$i - $this->head] = $this->items[$i];
                }

                $this->tail -= $this->head;
                $this->head = 0;
            }
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

}