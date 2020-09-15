<?php

echo "\nContoh pakai for : \n";
for ($i=0; $i<5; $i++) {
  for ($j=4; $j>$i; $j--) {
    echo " ";
  }

  for ($j=0; $j<=$i; $j++) {
    echo "*";
  }

  for ($j=0; $j<$i; $j++) {
    echo "*";
  }
  echo "\n";
}

echo "\nContoh pakai while : \n";
$i=0;
while ($i<5) {
  $j=4;
  while ($j>$i) {
    echo " ";
    $j--;
  }

  $j=0;
  while ($j<=$i) {
    echo "*";
    $j++;
  }

  $j=0;
  while ($j<$i) {
    echo "*";
    $j++;
  }

  echo "\n";
  $i++;
}

?>
