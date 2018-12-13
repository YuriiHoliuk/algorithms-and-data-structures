<?php

/**
 * Input: A sequence of n numbers (a1, a2, ... an).
 * Output: A permutation (reordering) (a1', a2', ... an') of the input sequence such
 * that a1' <= a2' <= ... an'
 * https://www.evernote.com/l/AUBNX-1ntH9IQ5CO9MkpjBE8kYaXHVtHpvQ
 */

$A = [5, 2, 4, 6, 1, 3];

for($j = 1; $j < count($A); $j++) {
    $key = $A[$j];
    // Insert A[j] into the sorted sequence A[1..j-1]
    $i = $j - 1;
    while ($i >= 0 && $A[$i] < $key) {
        $A[$i+1] = $A[$i];
        $i = $i - 1;
    }
    $A[$i + 1] = $key;
}

echo json_encode($A);