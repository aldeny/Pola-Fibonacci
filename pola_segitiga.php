<?php
$angka = 10;

for ($i = 1; $i <= $angka; $i++) {
  for ($j = $angka; $j > $i; $j--) {
    echo "&nbsp;&nbsp;";
  }
  for ($k = 1; $k < $i; $k++) {
    echo $k;
  }
  if ($i >= 1) {
    for ($l = $i; $l >= 1; $l--) {
      echo $l;
    }
  }

  echo "<br>";
}
