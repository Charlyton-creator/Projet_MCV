
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Page for updating a book</title>
</head>
<body>
    <h1 align="center">Modifier le livre</h1>
    <div class="ui inverted segment container" style="margin-top:2rem;">
        <form action="http://localhost/Projet_MVC/Bookcontroller/update/<?= $book['id']?>" method="POST">
            <div class="ui inverted form">
                <div class="two fields">
                    <div class="field">
                        <label>Libelle of the Book</label>
                        <input placeholder="Le premier Amour est toujours le dernier" type="text" name="libelle" value="<?= $book['nom']?>">
                    </div>
                    <div class="field">
                        <label>Book Author</label>
                        <input placeholder="Abdel Hakim A. Layele" type="text" name="author" value="<?= $book['author']?>">
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Price of the Book</label>
                        <input placeholder="5000" type="number" name="price" value="<?= $book['price']?>">
                    </div>
                    <div class="field">
                        <label>Content Type</label>
                        <input placeholder="Love, drame" type="text" name="content_type" value="<?= $book['content_type']?>">
                    </div>
                    <div class="field">
                        <label>Bibliothèque</label>
                        <input placeholder="Love, drame" type="number" name="bibliotheque_id" value="<?= $book['bibliotheque_id']?>">
                    </div>
                    <div class="field">
                        <input placeholder="" type="hidden" name="id" value="<?= $book['id']?>">
                    </div>
                </div>
                <input type="submit" value="Modifier" class="ui submit positive button">
            </div>
        </form>
    </div>
</body>
</html>