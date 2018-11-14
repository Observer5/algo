<?php


use Algo\Linked\NoonStr;
use Algo\Linked\SingleLinkedList;
use PHPUnit\Framework\TestCase;

class LinkedTest extends TestCase
{
    public function testSingeLinkedList()
    {
        $linked = new SingleLinkedList();
        $linked->insert(1);
        $linked->insert(2);
        $linked->insert(5);

        $this->assertEquals(3, $linked->getLength());

        $node = $linked->getNodeByIndex(1);
        $linked->delete($node);

        $this->assertEquals(2, $linked->getLength());
    }


    public function testNoonStrCheck()
    {
        $linked = new SingleLinkedList();

        $linked->insert('l');
        $linked->insert('e');
        $linked->insert('v');
        $linked->insert('e');
        $linked->insert('l');

        $instance = new NoonStr();

        $this->assertTrue($instance->check($linked));
    }
    
}