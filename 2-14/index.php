<?php
  $fluits = ["orange","banana","peach","melon"];
  echo count($fluits);
  echo '<br>';
  sort($fluits);
  var_dump($fluits);
  echo '<br>';

  var_dump(in_array(tomato,$fluits));
  echo '<br>';
  if(in_array("peach",$fluits)) {
    echo "桃だぞ";
  }else{
    echo "桃じゃないぞ";
  }

  $fff = implode("*",$fluits);
  echo '<br>';
  var_dump($fff);
  echo '<br>';
  $re_fff = explode("*",$fff);
  var_dump($re_fff);

?>