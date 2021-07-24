<?php
  $num = 0;
  $i = 0;
  while($num<=40){
    $i++;
    $s = mt_rand(1,6);
    echo $i. "回目＝". $s;
    echo '<br>';
    $num += $s;
  }
  echo "合計". $i . "回でゴールしました。";
  echo '<br>';

  date_default_timezone_set('Asia/Tokyo');
  $time = date("H", time());
  echo "今は" . $time. "時台です。";
  echo '<br>';
  if($time == 1 <= 4 || 18 <= 24){
    echo "こんばんは";
  }elseif($time == 5 <= 17){
    echo "こんにちは";
  }else{
    echo "おはよう";
  }

?>