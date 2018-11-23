<?php
namespace Algo\Queue;


use Algo\Linked\SingleLinkedListNode;

class LinkedListQueue
{
    /**
    * 队列头节点
    *
    * @var SingleLinkedListNode
    */
    public $head;

    /**
     * 队列尾节点
     *
     * @var null
     */
    public $tail;

    /**
     * 队列长度
     *
     * @var int
     */
    public $length;

    public function __construct()
    {
        $this->head = new SingleLinkedListNode();
        $this->tail = $this->head;

        $this->length = 0;
    }

    // 入队
    public function enqueue($data)
    {
        $newNode = new SingleLinkedListNode($data);

        $this->tail->next = $newNode;
        $this->tail = $newNode;

        $this->length++;
    }

    // 出队
    public function dequeue()
    {
        if ($this->length === 0) {
            return false;
        }

        $node = $this->head->next;

        $this->head->next = $this->head->next->next;

        $this->length--;

        return $node;
    }

    public function printAll()
    {
        if ($this->length !== 0) {
            $curNode = $this->head;
            while ($curNode->next) {
                echo $curNode->next->data . ' ==>';
                $curNode = $curNode->next;
            }
        }
    }
}