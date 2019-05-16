<!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>News erstellen - News-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>News erstellen</h1>
                <form class="mt-4 mb-4">
                    <div class="form-group">
                        <label for="title">Titel</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="short_text">Kurztext</label>
                        <textarea class="form-control" id="short_text" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" id="text" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Kategorie</label>
                        <select class="form-control">
                            <option>Bitte wählen</option>
                            <option>Politik</option>
                            <option>Wissenschaft</option>
                            <option>Sport</option>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="status">
                        <label class="form-check-label" for="status">Aktiviert</label>
                    </div>
                    <button type="submit" class="btn btn-primary">News erstellen</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>