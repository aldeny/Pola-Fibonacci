<?php

$rows = 5;

for ($i = 1; $i <= $rows; $i++)
  {

    for ($j= 5; $j > $i; $j--)
    {
      echo "&nbsp;&nbsp;";
    }

    for ($k = 1; $k < $i; $k++)
    {
      echo $k;
    }

  if($i>=1) 
  {
    for($m=$i; $m>=1; $m--)
    {
      echo $m;
    }
  }

    echo "<br>";
  } 

  for ($i = $rows-1; $i >= 1; $i--)
  {

    for ($j = 5; $j >= $i; $j--)
    {
      echo "&nbsp;";
    }

    for ($k = 1; $k <= $i; $k++)
    {
      echo $k;
    }

    if($i>=1) 
    {
      for($m=$i-1; $m>=1; $m--)
        {
          echo $m;
        }
    }

    echo "<br>";
  }



?>