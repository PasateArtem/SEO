 <?php

 $recepient = "juniorfront88@gmail.com";
  $sitename = "test";

  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $last_name = trim($_POST["last_name"]);
  $comments = trim($_POST["comments"]);
  $message = "Имя: $name \nТекст: $last_name \nИмеил: $email \nКоментарии: $comments";

  $pagetitle = "Новая заявка с сайта \"$sitename\"";
  mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
  

