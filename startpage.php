<?php
  //1. Общие настройки
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  //2. Подключение файлов
  include ('/template.php');
  include ('/actionForm.php');
  //3. Установка соеднинения с БД
  include ('/databaseconnect.php')
  //4. подключение обработки запросов Router
 ?>
