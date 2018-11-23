<?php


use Algo\Queue\ArrayQueue;
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

        $queue->printAll();

        $this->assertFalse($queue->enqueue('c'));
        $this->assertEquals('a', $queue->dequeue());

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

}