<?php 

include 'include_database.php';

$sql = 'SELECT * FROM news WHERE id = ' . mysqli_real_escape_string($link, $_GET['id']);

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_assoc($result);

$sql = 'SELECT * FROM categories';

$result = mysqli_query($link, $sql);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>News bearbeiten - News-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>News bearbeiten</h1>
                <form class="mt-4 mb-4" method="POST" action="news_edit_thanks.php?id=<?php echo $row['id'] ?>">
                    <div class="form-group">
                        <label for="title">Titel</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="short_text">Kurztext</label>
                        <textarea class="form-control" id="short_text" rows="3" name="short_text"><?php echo $row['short_text'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" id="text" rows="6" name="text"><?php echo $row['text'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Kategorie</label>
                        <select class="form-control" name="category_id">
                            <option>Bitte wählen</option>
                            <?php while ($rowCat = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $rowCat['id']; ?>"<?php if ($rowCat['id'] == $row['category_id']) { ?> selected<?php } ?>><?php echo $rowCat['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="status" name="status" value="1"<?php if ($row['status'] == 1) { ?> checked<?php } ?>>
                        <label class="form-check-label" for="status">Aktiviert</label>
                    </div>
                    <button type="submit" class="btn btn-primary">News aktualisieren</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>