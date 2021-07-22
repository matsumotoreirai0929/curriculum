<?php

  $n = 7.7;
  echo ceil($n);
  echo '<br>';
  echo floor($n);
  echo '<br>';
  echo round($n);
  echo '<br>';

  echo pi();
  echo '<br>';
  function circleArea($m) {
    $circle_area = $m * $m * pi();
    echo $circle_area;
  }
  circleArea(5);
  echo '<br>';

  echo mt_rand(1,10);
  echo '<br>';

  $hi = "coca cole";
  echo strlen($hi);
  echo '<br>';
  echo strpos($hi,"a");
  echo '<br>';
  echo substr($hi,-4,4);
  echo '<br>';
  echo str_replace("coca","COCA",$hi);
  echo '<br>';
  echo str_replace(" ","",$hi);
  echo '<br>';

  $job = "neet";
  $money = 400;
  $family = 8;

  printf("職業は%sです。給料は%dペソです。家族は%02d人います。",$job,$money,$family);
  echo '<br>';

  $profile = sprintf("職業は%sです。給料は%dペソです。家族は%02d人います",$job,$money,$family);
  echo $profile;


?>