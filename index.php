<?php
print_r($_POST);

 ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>message</title>
  </head>
  <body>
<form name="test" action="" method="post">
  <input type="text" name="name" value="" placeholder="имя">
  <textarea name="message" rows="10" cols="40"></textarea>
  <input type="submit" name="done" value="готово">
</form>
<style media="screen">
  .name {
    text-decoration-color: grey;
  }
</style>
  </body>
</html>
