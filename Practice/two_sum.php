<?php
// Сумма двух элементов массива = target
function twoSum($nums, $target) {
    $res = [];
    for ($n = 0; $n < count($nums) - 1; $n++){
        for ($m = 1; $m <= count($nums); $m++){
            if(($nums[$n] + $nums[$m]) == $target){
                $res[] = $n;
                $res[] = $m;
                break 2;
            }
        }
    }
    return $res;
}

$nums = [2,5,5,11];
$target = 10;

print_r(twoSum($nums, $target));
?>