<?php

include 'include_database.php';

$sql = 'DELETE FROM news WHERE id = "' . mysqli_real_escape_string($link, $_GET['id']) . '"';

$result = mysqli_query($link, $sql);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>News gelöscht - News-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <h1>News gelöscht</h1>
        <p>Die News wurde erfolgreich gelöscht.</p>
        <a href="index.php" class="btn btn-primary">Zurück zur Übersicht</a>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>