<?php

namespace Algo\Sort;

//关于冒泡排序的就这么多，归纳起来，主要就是两点：循环比较,交换键值
//冒泡排序（Bubble Sort）是一种简单的排序算法。
// 它重复地走访过要排序的数列，一次比较两个元素，如果他们的顺序错误就把他们交换过来。
// 插入排序和冒泡排序在平均和最坏情况下的时间复杂度都是O(n^2)，最好情况下都是O(n)，空间复杂度是O(1)。

class Bubble
{
    /**
     * 向下冒泡算法
     *
     * @param array $arr
     *
     * @return array
     */
    public function sort(array $arr)
    {
        $count = count($arr);
        if ($count < 2) {
            return $arr;
        }

        for ($i = 0; $i < $count; $i++) {
            $flag = false;
            for ($j = $i + 1; $j < $count; $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                    $flag = true;
                }
            }
            if ($flag === false) {
                break;
            }
        }
        return $arr;
    }

    public function sort2(array $arr)
    {
        $count = count($arr);
        if ($count < 2) {
            return $arr;
        }

        for ($i = 0; $i < $count; $i++) {
            $flag = false;
            for ($j = 0; $j < $count - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j + 1];
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $tmp;
                    $flag = true;
                }
            }

            if ($flag === false) {
                break;
            }
        }
        return $arr;
    }

}

