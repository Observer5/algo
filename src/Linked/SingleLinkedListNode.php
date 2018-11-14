<?php
namespace Algo\Linked;


class SingleLinkedListNode
{
    public $data;

    public $next;

    public function __construct($data = null)
    {
        $this->data = $data;
        $this->next = null;
    }
}