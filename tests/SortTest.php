<?php

use Algo\Sort\Bubble;
use Algo\Sort\Insert;
use Algo\Sort\Merge;
use Algo\Sort\Quick;
use Algo\Sort\Select;
use PHPUnit\Framework\TestCase;

final class SortTest extends TestCase
{
    public function testBubbleSortResult()
    {
        $arr = $arr = array(43, 21, 2, 1, 9, 24, 2, 99, 23, 8, 7, 114, 92, 5);

        $result = (new Bubble())->main($arr);

        sort($arr);

        $this->assertEquals($arr, $result);
    }

    public function testInsertSortResult()
    {
        $arr = array(23, 15, 43, 25, 54, 2);

        $result = (new Insert())->main($arr);

        sort($arr);

        $this->assertEquals($arr, $result);
    }


    public function testMergeSortResult()
    {
        $arr = array(23, 15, 43, 25, 54, 2);

        $result = (new Merge())->sort($arr);

        sort($arr);

        $this->assertEquals($arr, $result);
    }

    public function testQuickSortResult()
    {
        $arr = array(23, 15, 43, 25, 54, 2);

        $result = (new Quick())->sort($arr);

        sort($arr);

        $this->assertEquals($arr, $result);
    }

    public function testSelectSortResult()
    {
        $arr = array(23, 15, 43, 25, 54, 2);

        $result = (new Select())->sort($arr);

        sort($arr);

        $this->assertEquals($arr, $result);
    }
}