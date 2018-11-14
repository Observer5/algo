<?php

namespace Algo\Sort;

class Select
{
    //选择排序法
    //实现思路 双重循环完成，外层控制轮数，当前的最小值。内层 控制的比较次数
    function sort($arr)
    {
        //$i 当前最小值的位置， 需要参与比较的元素
        $len = count($arr);
        if ($len < 2) {
            return $arr;
        }

        for ($i = 0; $i < $len - 1; $i++) {
            //先假设最小的值的位置
            $p = $i;
            //$j 当前都需要和哪些元素比较，$i 后边的。
            for ($j = $i + 1; $j < $len; $j++) {
                //$arr[$p] 是 当前已知的最小值
                if ($arr[$p] > $arr[$j]) {
                    //比较，发现更小的,记录下最小值的位置；并且在下次比较时，应该采用已知的最小值进行比较。
                    $p = $j;
                }
            }
            //已经确定了当前的最小值的位置，保存到$p中。
            //如果发现 最小值的位置与当前假设的位置$i不同，则位置互换即可
            $tmp = $arr[$p];
            $arr[$p] = $arr[$i];
            $arr[$i] = $tmp;
        }

        //返回最终结果
        return $arr;
    }

}



