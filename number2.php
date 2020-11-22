<?php
$host = 'localhost'; // адрес сервера 
$database = 'project2756'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных

  $test = mysqli_query( $link ,"SELECT * FROM WORKER RIGHT JOIN CHILD ON CHILD.user_id = WORKER.id");
  print_r(mysqli_fetch_array($test));
   print_r(mysqli_fetch_array($test));
   print_r(mysqli_fetch_array($test));
   print_r(mysqli_fetch_array($test));
  
// закрываем подключение
mysqli_close($link);