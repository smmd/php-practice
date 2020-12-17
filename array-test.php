<?php

class Solution {

    function main () { 
        $array1 = [1, 3];
        $array2 = [2];

        print($this->findMedianSortedArrays($array1, $array2));

        $array3 = [1, 2];
        $array4 = [3, 4];

        print($this->findMedianSortedArrays($array3, $array4));

        $array5 = [0, 0];
        $array6 = [0, 0];

        print($this->findMedianSortedArrays($array5, $array6));

        $array7 = [];
        $array8 = [1];

        print($this->findMedianSortedArrays($array7, $array8));

        $array9 = [2];
        $array10 = [];

        print($this->findMedianSortedArrays($array9, $array10));
    }

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     $index
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $array1Size = count($nums1);
        $array2Size = count($nums2);
        $totalSize = $array1Size + $array2Size;

        $count1 = 0;
        $count2 = 0;
        $array = [];
        $flag = true;
        
        while ($flag) {
            if ($count1 != $array1Size && $count2 != $array2Size) {
                if ($nums1[$count1] < $nums2[$count2]) {
                    $array[] = $nums1[$count1];
                    $count1++;
                } elseif ($nums1[$count1] > $nums2[$count2]) {
                    $array[] = $nums2[$count2];
                    $count2++;
                } elseif ($nums1[$count1] == $nums2[$count2]) {
                    $array[] = $nums1[$count1];
                    $array[] = $nums2[$count2];
                    $count1++;
                    $count2++;
                }
            } else {
                if ($count2 == $array2Size) {
                    for ($i=$count1; $i < $array1Size; $i++) { 
                       $array[] = $nums1[$i];
                    }

                    $flag = false;
                } elseif($count1 == $array1Size) {
                    for ($i=$count2; $i < $array2Size; $i++) { 
                       $array[] = $nums2[$i];
                    }
                    $flag = false;
                }
            }
            
            if ($totalSize <= count($array)) {
                $flag = false;
            }
        }

        if ($totalSize%2 == 0) {
            $sizeOdd = $totalSize - 1;
            $index = $sizeOdd/2;  

            $median = ($array[$index] + $array[$index + 1]) / 2;
        } else {
            $median = $array[$totalSize/2];
        }
        
        return $median;
    }
}

$main = new Solution();
$main->main();
