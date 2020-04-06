<?php

/**
 * 移除元素
 * https://leetcode-cn.com/problems/remove-element/
 */
class Solution
{
    /**
     * 双指针1
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
//    function removeElement(&$nums, $val)
//    {
//        $i      = 0;
//        $length = count($nums);
//        for ($j = 0; $j < $length; $j++) {
//            if ($nums[$j] != $val) {
//                $nums[$i++] = $nums[$j];
//            }
//        }
//        return $i;
//    }
    /**
     * 双指针2(上面的解法每个元素都需要复制）
     */
    function removeElement(&$nums, $val)
    {
        $i = 0;
        $n = count($nums) - 1;
        while ($i <= $n) {
            if ($nums[$i] == $val) {
                // 如果与目标元素相等,则与最后一个元素交换
                $nums[$i] = $nums[$n--];
            } else {
                $i++;
            }
        }
        return $i;
    }
}

$s    = new Solution();
$nums = [0, 1, 2, 2, 3, 0, 4, 2];
echo $s->removeElement($nums, 2);
var_dump($nums);