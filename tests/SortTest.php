<?php

use Algo\Sort\Bubble;
use Algo\Sort\Counting;
use Algo\Sort\Insert;
use Algo\Sort\Merge;
use Algo\Sort\Quick;
use Algo\Sort\Select;
use PHPUnit\Framework\TestCase;

final class SortTest extends TestCase
{

    /**
     * @group sort
     */
    public function testCountingResult()
    {
        $arr = array(2, 5, 3, 0, 2, 3, 0, 3);
        $result = (new Counting())->sort($arr);

        sort($arr);
        
        $this->assertEquals($arr, $result);
    }

    public function testBubbleSortResult()
    {
        $arr = array(43, 21, 2, 1, 9, 24, 2, 99, 23, 8, 7, 114, 92, 5);

        $result = (new Bubble())->sort2($arr);

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