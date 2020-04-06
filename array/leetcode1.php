<?php

/**
 * 两数之和
 * https://leetcode-cn.com/problems/two-sum/
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
//    function twoSum($nums, $target)
//    {
//        if (count($nums) < 2) {
//            return [];
//        }
//        $length = count($nums);
//        for ($i = 0; $i < $length; $i++) {
//            $num = $target - $nums[$i];
//            for ($j = $i + 1; $j < $length; $j++) {
//                if ($nums[$j] == $num) {
//                    return [$i, $j];
//                }
//            }
//        }
//        return [];
//    }
    function twoSum($nums, $target)
    {
        $length = count($nums);
        if ($length < 2) {
            return [];
        }
        $hashmap = [];
//        foreach ($nums as $i => $num) {
//            $hashmap[$num] = $i;
//        }
        for ($i = 0; $i < $length; $i++) {
            $another = $target - $nums[$i];
            $index   = $hashmap[$another] ?? -1;
            if ($index >= 0) {
                return [$index, $i];
            }
            $hashmap[$nums[$i]] = $i;
        }
        return [];
    }
}

$solution = new Solution();
var_dump($solution->twoSum([3, 2, 4], 6));