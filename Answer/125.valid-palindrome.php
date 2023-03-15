<?php

/**
 * 验证回文串
 *
 * 如果在将所有大写字符转换为小写字符、并移除所有非字母数字字符之后，短语正着读和反着读都一样。则可以认为该短语是一个 回文串 。
 * 字母和数字都属于字母数字字符。
 * 给你一个字符串 s，如果它是 回文串 ，返回 true ；否则，返回 false 。
 *
 * 示例 1：
 * 输入: s = "A man, a plan, a canal: Panama"
 * 输出：true
 * 解释："amanaplanacanalpanama" 是回文串。
 *
 * 示例2：
 * 输入：s = "race a car"
 * 输出：false
 * 解释："raceacar" 不是回文串。
 *
 * 示例 3：
 * 输入：s = " "
 * 输出：true
 * 解释：在移除非字母数字字符之后，s 是一个空字符串 "" 。
 * 由于空字符串正着反着读都一样，所以是回文串。
 *
 * 提示
 * 1 <= s.length <= 2 * 105
 * 仅由可打印的 ASCII 字符组成
 *
 * 解题思路： 关键函数 ctype_alnum()
 */

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome_s1($s) {

        $len = strlen($s);
        $left = 0;
        $right = $len - 1;

        while ($left < $right) {

            while ($left < $right && !ctype_alnum($s[$left])) { $left++; }
            while ($left < $right && !ctype_alnum($s[$right])) { $right--; }

            if(strtolower($s[$left]) != strtolower($s[$right]))
                return false;

            $left++;
            $right--;

        }

        return true;
    }

    function isPalindrome_s2($s) {

        $regexp = "/[^a-zA-Z0-9]+/";
        $s = preg_replace($regexp, "", $s);
        return strcasecmp($s, strrev($s)) == 0;
    }
}

$s = "A man, a plan, a canal: Panama";
$obj = new Solution();
$resp = $obj->isPalindrome_s2($s);
var_dump($resp);
