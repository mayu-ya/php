<?php
function scoreNumber($score1, $score2, $score3)
{
  $value = $score1 + $score2 + $score3;
  return $value;
}

$total = scoreNumber(100, 50, 90);
if($total > 210){
  echo "合計点は" . $total . "なので合格です";
}else{
  echo "合計点は" . $total . "なので不合格です";
}
