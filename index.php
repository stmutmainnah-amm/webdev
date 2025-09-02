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

$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;

mergeArrays($nums1, $m, $nums2, $n);

echo "<h2>Output:</h2>";
echo "<pre>";
echo "[" . implode(", ", $nums1) . "]";
echo "</pre>";
?>


