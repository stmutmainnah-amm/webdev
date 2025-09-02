<?php
function mergeArrays(&$nums1, $m, $nums2, $n) {
    $i = $m - 1;      
    $j = $n - 1;      
    $k = $m + $n - 1; 

    while ($j >= 0) {
        if ($i >= 0 && $nums1[$i] > $nums2[$j]) {
            $nums1[$k] = $nums1[$i];
            $i--;
        } else {
            $nums1[$k] = $nums2[$j];
            $j--;
        }
        $k--;
    }
}

// Example 1
$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;
mergeArrays($nums1, $m, $nums2, $n);
echo "Example 1: [" . implode(", ", $nums1) . "]<br>";

// Example 2
$nums1 = [1];
$m = 1;
$nums2 = [];
$n = 0;
mergeArrays($nums1, $m, $nums2, $n);
echo "Example 2: [" . implode(", ", $nums1) . "]<br>";

// Example 3
$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;
mergeArrays($nums1, $m, $nums2, $n);
echo "Example 3: [" . implode(", ", $nums1) . "]<br>";
?>
