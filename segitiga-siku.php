<?php

echo "\nContoh pakai for : \n";
for ($i=0; $i<5; $i++) {
  for ($j=0; $j<=$i; $j++) {
    echo "*";
  }
  echo "\n";
}

echo "\nContoh pakai while : \n";
$i=0;
while ($i<5) {
  $j=0;
  while ($j<=$i) {
    echo "*";
    $j++;
  }
  echo "\n";
  $i++;
}

echo "\nContoh pakai do while : \n";
$i=0;
do {
  $j=0;
  do {
    echo "*";
    $j++;
  } while ($j<=$i);
  echo "\n";
  $i++;
} while ($i<5);

?>
