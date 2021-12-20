<?php
  $p=$_POST['psi'];
  $r=$_POST['rsi'];
  $n=$_POST['nsi'];

  $si=($p*$r*$n)/100;
  echo "simple interest is: ". $si;

?>
