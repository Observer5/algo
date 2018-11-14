<?php
namespace Algo;

class BinarySearch
{

    public function traverse(array $arr, $val)
    {
        $low = 0;
        $high = count($arr) - 1;

        while ($low <= $high) {
            $mid = floor(($high + $low) / 2);

            $midVal = $arr[$mid];
            if ($midVal == $val) {
                return $mid;
            } elseif ($midVal < $val) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        return -1;
    }

    public function recursion(array $arr, $low, $high, $val)
    {
        $mid = floor(($high + $low) / 2);
        $midVal = $arr[$mid];

        if ($low > $high) {
            return -1;
        }

        if ($midVal == $val) {
            return $mid;
        } elseif ($midVal < $val) {
            return $this->recursion($arr, $mid + 1, $high, $val);
        } else {
            return $this->recursion($arr, $low, $mid - 1, $val);
        }
    }

    function bsearch3(array $arr, $val)
    {
        $low = 0;
        $high = count($arr) - 1;

        while ($low <= $high) {
            $mid = intval(floor(($high + $low) / 2));

            $midVal = $arr[$mid];
            if ($midVal > $val) {
                $high = $mid - 1;
            } elseif ($midVal < $val) {
                $low = $mid + 1;
            } else {

                if ($mid == 0 || $val != $arr[$mid - 1]) {
                    return $mid;
                } else {
                    $high = $mid - 1;
                }
            }
        }
        return -1;
    }

    //$array4 = array(1, 2, 3, 4, 5, 6, 7, 7, 7, 8, 9);
    //查找最后一个值等于给定值的
    function bsearch4(array $arr, $val)
    {
        $low = 0;
        $high = count($arr) - 1;

        while ($low <= $high) {
            $mid = intval(floor(($high + $low) / 2));

            $midVal = $arr[$mid];
            if ($midVal > $val) {
                $high = $mid - 1;
            } elseif ($midVal < $val) {
                $low = $mid + 1;
            } else {

                if ($mid == count($arr) - 1 || $val != $arr[$mid + 1]) {
                    return $mid;
                } else {
                    $low = $mid + 1;
                }
            }
        }
        return -1;
    }

    //$array5 = array(3, 4, 6, 7, 10);
    //查找第一个大于等于给定值的
    function bsearch5(array $arr, $val)
    {
        $low = 0;
        $high = count($arr) - 1;

        while ($low <= $high) {
            $mid = intval(floor(($high + $low) / 2));
            $midVal = $arr[$mid];
            if ($midVal >= $val) {
                if ($mid == 0 || ($arr[$mid - 1] < $val )) {
                    return $mid;
                } else {
                    $high = $mid - 1;
                }

            } else {
                $low = $mid + 1;
            }
        }
        return -1;
    }

    //$array6 = array(3, 4, 6, 7, 10);
    //查找最后一个小于等于给定值的
    function bsearch6(array $arr, $val)
    {
        $low = 0;
        $high = count($arr) - 1;

        while ($low <= $high) {
            $mid = intval(floor(($high + $low) / 2));
            $midVal = $arr[$mid];
            if ($val >= $midVal) {
                if ($mid == count($arr) - 1 || ($arr[$mid + 1] > $val )) {
                    return $mid;
                } else {
                    $low = $mid + 1;
                }

            } else {
                $high = $mid - 1;
            }
        }
        return -1;
    }

}