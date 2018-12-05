<?php


namespace Algo\Sort;


/**
 * Class Counting
 *
 * @package Algo\Sort
 *
 * 计数排序只能用在数据范围不大的场景中，如果数据范围 k 比要排序的数据 n 大很多，就不适合用计数排序了。
 * 而且，计数排序只能给非负整数排序，如果要排序的数据是其他类型的，要将其在不改变相对大小的情况下，转化为非负整数。
 */
class Counting
{
    public function sort(array $arr)
    {
        // 查找数组中数据的范围
        $max = $arr[0];
        foreach ($arr as $item) {
            if ($item > $max) {
                $max = $item;
            }
        }

        //countArr 下标是取值范围
        $countArr = [];
        for ($i = 0; $i <= $max; $i++) {
            $countArr[$i] = 0;
        }

        // 计算每个元素的个数，放入countArr中
        foreach ($arr as $item) {
            $countArr[$item]++;
        }

        // 依次累加
        for ($i = 1; $i <= $max; $i++) {
            $countArr[$i] += $countArr[$i - 1];
        }

        $resultArr = [];
        for($i = count($arr) - 1; $i >= 0; $i--) {
            $index = $countArr[$arr[$i]] - 1;
            $resultArr[$index] = $arr[$i];
            $countArr[$arr[$i]]--;
        }

        for($i = 0; $i < count($arr); $i++) {
            $arr[$i] = $resultArr[$i];
        }

        return $arr;
    }
}