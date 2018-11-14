<?php


namespace Algo\Linked;


class SingleLinkedList
{
    /**
     * 单链表头节点（哨兵节点)
     * @var SingleLinkedListNode
     */
    public $head;

    private $length;

    public function getLength()
    {
        return $this->length;
    }

    public function __construct($head = null)
    {
        if (is_null($head)) {
            $this->head = new SingleLinkedListNode();
        } else {
            $this->head = $head;
        }

        $this->length = 0;
    }

    public function insert($data)
    {
        return $this->insertDataAfter($this->head, $data);
    }

    public function insertDataAfter(SingleLinkedListNode $originNode, $data)
    {
        if (empty($originNode)) {
            return false;
        }

        $newNode = new SingleLinkedListNode($data);

        $newNode->next = $originNode->next;

        $originNode->next = $newNode;

        $this->length++;

        return $newNode;
    }

    public function delete(SingleLinkedListNode $node)
    {
        if (empty($node)) {
            return false;
        }

        $preNode = $this->getPreNode($node);

        if ($preNode) {
            $preNode->next = $node->next;
            unset($node);

            $this->length--;
            return true;
        } else {
            return false;
        }

    }

    public function getPreNode(SingleLinkedListNode $node)
    {
        if (empty($node)) {
            return false;
        }

        $curNode = $this->head;
        $preNode = $this->head;

        while ($curNode != null && $curNode !== $node) {
            $preNode = $curNode;
            $curNode = $curNode->next;
        }

        return $preNode;
    }

    public function getNodeByIndex($index)
    {
        if ($index >= $this->length) {
            return null;
        }

        //第一个node
        $curNode = $this->head->next;
        for ($i = 0; $i < $index; ++$i) {
            $curNode = $curNode->next;
        }
        return $curNode;
    }
}