<?php
  $result = $_SERVER['REQUEST_URI'];
  if($result == '/mvpversion/startpage.php/events') {
    echo '<p class="stringnews">Посети роботон</p>';
  }
  if($result == '/mvpversion/startpage.php/us') {
    echo "Подай заявку в УС";
  }
  if($result == '/mvpversion/startpage.php/questions') {
    echo "Задать вопрос?";
  }
 ?>
