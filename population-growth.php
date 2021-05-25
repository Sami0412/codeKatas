<?php

function nbYear($p0, $percent, $aug, $p) {
    $newPop = $p0 + $p0 * $percent/100 + $aug;
    $n = 1;
    while ($newPop < $p) {
      $p0 = $newPop;
      $newPop = $p0 + $p0 * $percent/100 + $aug;
      $n++;
    };
    return $n;
  }

echo nbYear(1000, 2, 50, 1200);

//Better:
// function nbYear($p0, $percent, $aug, $p) {
//     $count = 0;
//     while ($p0 < $p) {
//       $p0 *= 1 + $percent / 100;
//       $p0 += $aug;
//       $count++;
//     }
//     return $count;
//   }

// function nbYear($p0, $percent, $aug, $p) {
//     $years = 0;
//     while ($p0 < $p) {
//       $years++;
//       $p0 = $p0 + ($p0 * ($percent / 100.0) + $aug);
//     }
//     return $years;
// }
