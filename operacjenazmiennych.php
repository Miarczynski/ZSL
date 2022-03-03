<?php
  echo PHP_VERSION, "<br>"; //7.1.13
  echo 2**10, "<br>"; //1024, potegowanie
  $x=10;
  $y=5;
  echo $x<=>$y, "<br>";

  $x=1;
  $y=1.0;
  echo gettype($x), "<br>"; //integer
  echo gettype($y), "<br>"; //double


  if($x==$y)
    {
    echo "rowne <br>";

    }
    else {
    echo "rozne <br>";
    }


    if($x===$y)
      {
      echo "indentyczne <br>";

      }
      else {
      echo "nieidentyczne <br>";
      }

      /* preinkrementacja ++$//
      postinkrementacja $i++
      predekrementacja --$i
      postdekrementacja $i--
      */

      $x=1;
      echo $x; //1
      $x=$x++;
      echo $x; //1
      $x=++$x;
      echo $x; //2
      $y=++$x;
      echo $x; //3
      echo $y; //3
      $y=$x++;
      echo $x; //4
 ?>
