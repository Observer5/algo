<?php
namespace Algo\Sort;

//最坏情况就是，序列是降序排列，那么此时需要进行的比较共有n(n-1)/2次。
// 插入排序的赋值操作是比较操作的次数加上(n-1）次。 平均来说插入排序算法的时间复杂度为O(n^2）。

class Insert
{
    /**
     * @param array $arr
     *
     * @return mixed
     */
    public function main($arr)
    {
        //获取需要排序的长度
        $length = count($arr);
        if ($length < 2) {
            return $arr;
        }

        for ($i = 1; $i < $length; $i++) {

            $value = $arr[$i];

            for ($j = $i - 1; $j >= 0; $j--) {
                if ($arr[$j] > $value) {
                    $arr[$j + 1] = $arr[$j];
                } else {
                    break;
                }
            }

            $arr[$j + 1] = $value;
        }

        return $arr;
    }
}

