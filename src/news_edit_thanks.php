<?php

include 'include_database.php';

if (empty($_POST['status'])) {
  $status = 0;
} else {
  $status = 1;
}

$sql = 'UPDATE news 
SET 
title = "' .  mysqli_real_escape_string($link, $_POST['title']) . '",
short_text = "' .  mysqli_real_escape_string($link, $_POST['short_text']) . '",
text = "' .  mysqli_real_escape_string($link, $_POST['text']) . '",
category_id = "' .  mysqli_real_escape_string($link, $_POST['category_id']) . '",
status = "' .  mysqli_real_escape_string($link, $status) . '"
WHERE id = "' . mysqli_real_escape_string($link, $_GET['id']) . '"';

$result = mysqli_query($link, $sql) or die(mysqli_error($link));

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>News aktualisiert - News-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <h1>News aktualisiert</h1>
        <p>Die News wurde erfolgreich aktualisiert.</p>
        <a href="index.php" class="btn btn-primary">Zurück zur Übersicht</a>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>