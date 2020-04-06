<?php

/**
 * 删除排序数组中的重复项
 * https://leetcode-cn.com/problems/remove-duplicates-from-sorted-array/
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
//    function removeDuplicates(&$nums)
//    {
//        $length = count($nums);
//        $count  = 0;
//        for ($i = 1; $i < $length; $i++) {
//            if ($nums[$i] == $nums[$i - 1 - $count]) {
//                $count++;
//                unset($nums[$i]);
//            } else {
//                $count = 0;
//            }
//        }
//        return count($nums);
//    }
    /**
     * 双指针法
     */
    function removeDuplicates(&$nums)
    {
        $length = count($nums);
        $i      = 0;
        for ($j = 1; $j < $length; $j++) {
            if ($nums[$j] != $nums[$i]) {
                $nums[++$i] = $nums[$j];
            }
        }
        return $i + 1;
    }
}

$s    = new Solution();
$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
echo $s->removeDuplicates($nums);
var_dump($nums);