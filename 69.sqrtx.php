<?php

/**
 * 给你一个非负整数 x ，计算并返回 x 的 算术平方根 。由于返回类型是整数，结果只保留 整数部分 ，小数部分将被 舍去 。
 * 注意：不允许使用任何内置指数函数和算符，例如 pow(x, 0.5) 或者 x ** 0.5 。
 *
 * 示例 1：
 * 输入：x = 4
 * 输出：2
 *
 * 示例 2：
 * 输入：x = 8
 * 输出：2
 * 解释：8 的算术平方根是 2.82842..., 由于返回类型是整数，小数部分将被舍去
 *
 * 提示：
 * 0 <= x <= 231 - 1
 *
 * 解题思路：
 * 1、袖珍计算器算法
 * 2、二分查找 重点
 * 3、牛顿迭代
 */

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $left = 0;
        $right = $x;
        $ans = 0; // 最终要求的值
        while ($left <= $right) {
            $mid = $left + $right >> 1;
            if($mid * $mid <= $x) {
                $left = $mid + 1;
                $ans = $mid;
            } else {
                $right = $mid - 1;
            }
        }
        return $ans;
    }
}

$x = 17;
$obj = new Solution();
$res = $obj->mySqrt($x);
var_dump($res);
