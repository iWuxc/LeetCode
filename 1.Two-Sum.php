<?php

/**
* 	示例 1：
    输入：nums = [2,7,11,15], target = 9
    输出：[0,1]
    解释：因为 nums[0] + nums[1] == 9 ，返回 [0, 1] 。
    示例 2：
    输入：nums = [3,2,4], target = 6
    输出：[1,2]
    示例 3：

    输入：nums = [3,3], target = 6
    输出：[0,1]

    提示：
    2 <= nums.length <= 104
    -109 <= nums[i] <= 109
    -109 <= target <= 109
    只会存在一个有效答案
    进阶：你可以想出一个时间复杂度小于 O(n2) 的算法吗？
 *
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {

    	$len = count($nums);

    	if($len == 2) {
    		return [0, 1];
    	}

    	$hash = [];

        // 确定 $target = $i + hash里边的知， 如果找出来， 直接返回， 如果没有存入hash， 寻找下一位

    	for($i = 0; $i < $len; $i++) {

    		if(isset($hash[$target - $nums[$i]])) {
                return [$hash[$target - $nums[$i]], $i];
            }

            $hash[$nums[$i]] = $i;
    	}

    }
}

$arr = [1, 9, 2, 8, 3, 4, 7];
$target = 3;

$obj = new Solution();

$resp = $obj->twoSum($arr, $target);
var_dump($resp);


