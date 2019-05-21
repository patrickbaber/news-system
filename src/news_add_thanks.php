<?php

include 'include_database.php';

var_dump($_POST);

//$sql = 'INSERT INTO categories SET name = "' .  mysqli_real_escape_string($link, $_POST['name']) . '"';

//$result = mysqli_query($link, $sql);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>News erstellt - News-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <h1>News erstellt</h1>
        <p>Die News wurde erfolgreich erstellt.</p>
        <a href="news.php" class="btn btn-primary">Zurück zur Übersicht</a>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>