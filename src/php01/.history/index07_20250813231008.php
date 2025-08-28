<?php
function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 3);
echo $total;
