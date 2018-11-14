<?php
namespace Algo\Sort;

class Merge
{

    public function sort(array $lists)
    {
        $n = count($lists);
        if ($n <= 1) {
            return $lists;
        }

        $mid = floor($n / 2);

        $left = $this->sort(array_slice($lists, 0, $mid));
        $right = $this->sort(array_slice($lists, $mid));
        $lists = $this->merge($left, $right);
        return $lists;
    }

    public function merge(array $left, array $right)
    {
        $arr = [];
        $i = $j = 0;
        while ($i < count($left) && $j < count($right)) {
            if ($left[$i] < $right[$j]) {
                $arr[] = $left[$i];
                $i++;
            } else {
                $arr[] = $right[$j];
                $j++;
            }
        }
        $arr = array_merge($arr, array_slice($left, $i));
        $arr = array_merge($arr, array_slice($right, $j));

        return $arr;
    }

}
