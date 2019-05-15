<!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>News - News-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm">
                <h1>News</h1>
            </div>
            <div class="col-sm mt-3">
                <button type="button" class="btn btn-primary float-right">News erstellen</button>
            </div>
        </div>
        <table class="table table-striped table-light mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titel</th>
                    <th scope="col">Untertitel</th>
                    <th scope="col">Kategorie</th>
                    <th scope="col">Aktionen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Welches Europa soll's denn sein?</td>
                    <td>Klima, Migration, Digitalisierung ...</td>
                    <td>Politik</td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href="#" role="button">Bearbeiten</a>
                        <a class="btn btn-danger btn-sm" href="#" role="button">Löschen</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Deutsche Wirtschaft wieder leicht gewachsen</td>
                    <td>Nach einer Stagnation Ende 2018 ...</td>
                    <td>Wirtschaft</td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href="#" role="button">Bearbeiten</a>
                        <a class="btn btn-danger btn-sm" href="#" role="button">Löschen</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Pep Guardiola hat doch recht</td>
                    <td>Viele möchten einen Abgesang auf ihn ...</td>
                    <td>Sport</td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href="#" role="button">Bearbeiten</a>
                        <a class="btn btn-danger btn-sm" href="#" role="button">Löschen</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>