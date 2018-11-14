<?php
namespace Algo\Stack;


class ArrayStack
{
    private $items;//数组

    private $count;//栈中元素的个数

    private $n;//栈的大小

    public function __construct($n)
    {
        $this->items = array_pad([], $n, 0);
        $this->n = $n;
        $this->count = 0;
    }

    public function push(int $item)
    {
        if ($this->count === $this->n) {
            return false;
        }

        $this->items[$this->count] = $item;

        $this->count++;

        return true;
    }

    public function pop()
    {
        if ($this->count < 1) {
            return null;
        }
        $this->count--;
        return $this->items[$this->count];
    }
}