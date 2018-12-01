<?php


use Algo\Queue\ArrayQueue;
use Algo\Queue\CircularQueue;
use Algo\Queue\DynamicArrayQueue;
use Algo\Queue\LinkedListQueue;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    /**
     * @group queue
     */
    public function testArrayQueue()
    {
        $queue = new ArrayQueue(2);

        $queue->enqueue('a');
        $queue->enqueue('b');

        $this->assertFalse($queue->enqueue('c'));
        $this->assertEquals('a', $queue->dequeue());
        $this->assertEquals('b', $queue->dequeue());

        $this->assertFalse($queue->enqueue('a'));
    }

    /**
     * @group queue
     */
    public function testLinkedListQueue()
    {
        $queue = new LinkedListQueue();

        $queue->enqueue('a');
        $queue->enqueue('b');

        $queue->printAll();

        $this->assertEquals('a', $queue->dequeue()->data);
    }

    /**
     * @group queue
     */
    public function testDynamicArrayQueue()
    {
        $queue = new DynamicArrayQueue(2);
        $queue->enqueue('a');
        $queue->enqueue('b');

        $this->assertEquals('a', $queue->dequeue());

        $result = $queue->enqueue('c');

        $this->assertTrue($result);
        $this->assertEquals('b', $queue->dequeue());
    }

    /**
     * @group queue
     */
    public function testCircularQueue()
    {
        $queue = new CircularQueue(5);
        $queue->enqueue('a');
        $queue->enqueue('b');
        $queue->enqueue('c');
        $queue->enqueue('d');

        $this->assertEquals('a', $queue->dequeue());
        $this->assertEquals('b', $queue->dequeue());
        $this->assertEquals('c', $queue->dequeue());
        $this->assertEquals('d', $queue->dequeue());
    }

}