<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Detail of Bibliotheque</title>
</head>
<body>
<div class="ui container" style="margin-top:2rem;">
    <table class="ui celled striped table">
        <thead>
            <tr><th colspan="3">
            <strong> Detail of </strong> <h1 class=""><?= isset($bibliotheque) ? $bibliotheque['libelle'] : 'Default'?></h1>
            </th>
        </tr></thead>
        <tbody>
            <tr>
                <td>
                    <i class="home icon"></i> Bibliotheque Place
                </td>
                <td><?= $bibliotheque['emplacement'] ?></td>
            </tr>
            <tr>
                <td>
                    <i class="home icon"></i> Bibliotheque detentor
                </td>
                <td><?= $bibliotheque['detenteur'] ?></td>
            </tr>
        </tbody>
    </table> <br>
    <h2 align="center">Associated Books</h2>
        <table class="ui compact celled table">
            <thead>
                <tr>
                    <th>Libelle</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Content Type</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $book) :?>
                    <tr>
                        <td><?= $book['nom']?></td>
                        <td><?= $book['author']?></td>
                        <td><?= $book['price']?></td>
                        <td><?= $book['content_type']?></td>
                    </tr>
                <?php endforeach ?>
                    
            </tbody>
        </table>
    <button class="ui labeled icon orange button">
        <i class="left chevron icon"></i>
        <a href="http://localhost/Projet_MVC/Bibliothequecontroller/index">Retour vers la liste</a>
    </button>
</div>    
</body>
</html>