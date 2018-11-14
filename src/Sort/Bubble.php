<?php

namespace Algo\Sort;

//关于冒泡排序的就这么多，归纳起来，主要就是两点：循环比较,交换键值
//冒泡排序（Bubble Sort）是一种简单的排序算法。
// 它重复地走访过要排序的数列，一次比较两个元素，如果他们的顺序错误就把他们交换过来。
// 插入排序和冒泡排序在平均和最坏情况下的时间复杂度都是O(n^2)，最好情况下都是O(n)，空间复杂度是O(1)。

class Bubble
{
    public function main($arr)
    {
        $count = count($arr);
        if ($count < 2) {
            return $arr;
        }

        // 第一层for循环可以理解为从数组中键为0开始循环到最后一个
        for ($i = 0; $i < $count; $i++) {
            // 比较数组中相邻两个值的大小
            for ($j = $i + 1; $j < $count; $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $tmp = $arr[$i]; // 这里的tmp是临时变量
                    $arr[$i] = $arr[$j]; // 第一次更换位置
                    $arr[$j] = $tmp;            // 完成位置互换
                }
            }
        }

        return $arr;
    }
}

