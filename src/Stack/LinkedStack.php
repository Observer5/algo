<?php


namespace Algo\Stack;


use Algo\Linked\SingleLinkedListNode;

class LinkedStack
{
    /**
     * 单链表头节点（哨兵节点)
     * @var SingleLinkedListNode
     */
    public $head;

    private $length;//栈中元素的个数


    public function __construct($head = null)
    {
        if (is_null($head)) {
            $this->head = new SingleLinkedListNode();
        } else {
            $this->head = $head;
        }

        $this->length = 0;
    }

    public function push($data)
    {
        $node = new SingleLinkedListNode($data);

        $node->next = $this->head->next;
        $this->head->next = $node;
        $this->length++;

        return $node;
    }

    public function pop()
    {
        if ($this->length < 1) {
            return false;
        }

        $this->head->next = $this->head->next->next;
        $this->length--;

        return true;
    }


    public function top()
    {
        if ($this->length === 0) {
            return false;
        }

        return $this->head->next;
    }
}