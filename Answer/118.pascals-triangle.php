<?php

/**
 * 给定一个非负整数 numRows，生成「杨辉三角」的前 numRows 行。在「杨辉三角」中，每个数是它左上方和右上方的数的和。
 * 示例 1:
 * 输入: numRows = 5
 * 输出: [[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]]
 *
 * 示例 2:
 * 输入: numRows = 1
 * 输出: [[1]]
 *
 * 提示
 * 1 <= numRows <= 30
 *
 *
 * 解题思路
 * 思路及解法
 * 杨辉三角，是二项式系数在三角形中的一种几何排列。它是中国古代数学的杰出研究成果之一，它把二项式系数图形化，把组合数内在的一些代数性质直观地从图形中体现出来，是一种离散型的数与形的结合。
 * 杨辉三角具有以下性质：
 */

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $res = [];
        for($i = 0; $i < $numRows; $i++) {
            if($i == 0) {
                $res[$i] = [1];
            } else {
                $res[$i][] = 1;
                for ($j = 1; $j < $i; $j++) {
                    $res[$i][] = $res[$i - 1][$j] + $res[$i - 1][$j - 1];
                }
                $res[$i][] = 1;
            }
        }
        return $res;
    }
}

$obj = new Solution();
$res = $obj->generate(6);
print_r($res);
