<?php
  include_once ('databaseconnect.php');
  if(isset($_POST['submit'])) {
    $date = $_POST['date'];
    $array = $_POST['checkbox'];
    if($array != null) {
      foreach ($array as $checkbox => $value) {
      $query2 = "SELECT event_date, event_name FROM `events` WHERE event_korpus='$value';";
      $result1 = mysqli_query($sqldata, $query2);
      $count = mysqli_num_rows($result1);
      if($count) {
        while ($row = mysqli_fetch_array($result1)) {
          echo $row['event_name'];
        }
      }
    }
    }
    $query = "SELECT event_korpus FROM `events` WHERE event_date = '$date';";
    $resultdate = mysqli_query($sqldata, $query);
    $count2 = mysqli_num_rows($resultdate);
    if($count2) {
    while ($row = mysqli_fetch_array($resultdate)) {
      foreach($array as $checkbox => $corpus) {
        if($row['event_korpus'] = $corpus) {
          echo $corpus;
        }
        else {
          echo "No";
        }
      }
    }
  }
  }
?>
