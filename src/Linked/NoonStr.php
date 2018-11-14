<?php


namespace Algo\Linked;


class NoonStr
{
    public function check(SingleLinkedList $linked)
    {
        $pre = null;
        $fast = $linked->head->next;
        $slow = $linked->head->next;

        while($fast && $fast->next) {
            $fast = $fast->next->next;
            // 单链表反转关键代码 三个指针
            $remainNode = $slow->next;
            $slow->next = $pre;
            $pre = $slow;
            $slow = $remainNode;
        }

        // 链表长度为偶数的情况
        if ($fast != null) {
            $slow = $slow->next;
        }
        // 开始逐个比较
        while ($slow != null) {
            if ($slow->data != $pre->data) {
                return false;
            }
            $slow = $slow->next;
            $pre = $pre->next;
        }
        return true;
    }
}