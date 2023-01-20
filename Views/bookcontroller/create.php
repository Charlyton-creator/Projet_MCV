<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Page for Adding a new book</title>
</head>
<body>
    <h1 align="center">Ajouter un nouveau livre</h1>
    <div class="ui inverted segment container" style="margin-top:2rem;">
        <form action="http://localhost/Projet_MVC/Bookcontroller/create" method="post">
            <div class="ui inverted form">
                <div class="two fields">
                    <div class="field">
                        <label>Libelle of the Book</label>
                        <input placeholder="Le premier Amour est toujours le dernier" type="text" name="nom">
                    </div>
                    <div class="field">
                        <label>Book Author</label>
                        <input placeholder="Abdel Hakim A. Layele" type="text" name="author">
                    </div>
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Price of the Book</label>
                        <input placeholder="5000" type="number" name="price">
                    </div>
                    <div class="field">
                        <label>Content Type</label>
                        <input placeholder="Love, drame" type="text" name="content_type">
                    </div>
                    <div class="field">
                        <label>Bibliotheque of the Book</label>
                        <select class="ui fluid search dropdown" name="bibliotheque_id">
                        <?php foreach($bibliotheques as $bibliotheque): ?>
                            <option value="<?= $bibliotheque['id'] ?>"><?= $bibliotheque['libelle'] ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <input type="submit" class="ui submit positive button">
            </div>
        </form>
    </div>
</body>
</html>