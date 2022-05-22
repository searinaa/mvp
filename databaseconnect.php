<?php
$sqldata = mysqli_connect("localhost", "root", "", "mvptable");
if (mysqli_connect_errno()) {
  echo "Error";
}
mysqli_set_charset($sqldata, "utf-8");
 ?>
