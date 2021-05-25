<?php

//My solution
function solution($number)
{
   $values = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
   $roman = ["M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"];
   $romanEquivalent = "";
   
   for ($i=0; $i < count($values); $i++) {
     while ($values[$i] <= $number) {
       $romanEquivalent .= $roman[$i];
       $number -= $values[$i];
     }
   }
   
   return $romanEquivalent;
};

echo solution(1600);

//Another solution
// function solution($number) {
//   $pairs = [
//     [1000, 'M'],
//     [900, 'CM'],
//     [500, 'D'],
//     [400, 'CD'],
//     [100, 'C'],
//     [90, 'XC'],
//     [50, 'L'],
//     [40, 'XL'],
//     [10, 'X'],
//     [9, 'IX'],
//     [5, 'V'],
//     [4, 'IV'],
//     [1, 'I']
//   ];

//   $result = '';
//   foreach($pairs as $pair) {
//     while ($number >= $pair[0]) {
//       $number -= $pair[0];
//       $result .= $pair[1];
//     }
//   }
//   return $result;
// }