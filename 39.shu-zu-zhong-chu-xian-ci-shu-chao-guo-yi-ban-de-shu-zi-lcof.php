<?php

/**
 *  剑指 Offer 39. 数组中出现次数超过一半的数字
 *
 * 数组中有一个数字出现的次数超过数组长度的一半，请找出这个数字。
 * 你可以假设数组是非空的，并且给定的数组总是存在多数元素。
 * 示例 1:
 * 输入: [1, 2, 3, 2, 2, 2, 5, 4, 2]
 * 输出: 2
 * 限制：
 * 1 <= 数组长度 <= 50000
 * 注意：本题与主站 169 题相同：https://leetcode-cn.com/problems/majority-element/
 *
 * 解题思路：
 *
 * 本文将 “数组中出现次数超过一半的数字” 简称为 “众数” 。 需要注意的是，数学中众数的定义为 “数组中出现次数最多的数字” ，与本文定义不同。
 * 本题常见的三种解法：
 * 1、哈希表统计法： 遍历数组 nums ，用 HashMap 统计各数字的数量，即可找出 众数 。此方法时间和空间复杂度均为 O(N)O(N)O(N) 。
 * 2、数组排序法： 将数组 nums 排序，数组中点的元素 一定为众数。
 * 3、摩尔投票法： 核心理念为 票数正负抵消 。此方法时间和空间复杂度分别为 O(N) 和 O(1)O(1)O(1) ，为本题的最佳解法。

 *
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $x = 0; $vote = 0;
        for($i = 0; $i < count($nums); $i++) {
            if($vote == 0) {
                $x = $nums[$i];
            }

            $vote += $x == $nums[$i] ? 1 : -1;
        }

        return $x;
    }
}

$arr = [1, 1, 2, 2, 3, 3];
$obj = new Solution();
$res = $obj->majorityElement($arr);
var_dump($res);
