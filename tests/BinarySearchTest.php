<?php


use Algo\BinarySearch;
use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    /**
     * @var BinarySearch
     */
    private $instance;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->instance = new BinarySearch();
    }

    public function testTraverse()
    {
        $arr = array(43, 21, 2, 1, 9, 24, 2, 99, 23, 8, 7, 114, 92, 5);
        sort($arr);

        $searchIndex = mt_rand(0, count($arr) - 1);
        $searchValue = $arr[$searchIndex];

        $resultIndex = $this->instance->traverse($arr, $searchValue);

        $this->assertEquals($searchIndex, $resultIndex);
    }

    public function testRecursion()
    {
        $arr = array(43, 21, 2, 1, 9);
        sort($arr);

        $searchIndex = mt_rand(0, count($arr) - 1);
        $searchValue = $arr[$searchIndex];

        $resultIndex = $this->instance->recursion($arr, 0, count($arr) - 1, $searchValue);

        $this->assertEquals($searchIndex, $resultIndex);
    }

}