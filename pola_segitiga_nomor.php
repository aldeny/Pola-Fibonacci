<?php
function cetak_pola($angka)
{
  for ($i = 1; $i <= $angka; $i++) {
    for ($j = $angka; $j > $i; $j--) {
      echo "&nbsp";
    }
    for ($k = 1; $k <= $i; $k++) {
      echo $i . "";
    }
    echo "<br>";
  }
}

cetak_pola(5);
