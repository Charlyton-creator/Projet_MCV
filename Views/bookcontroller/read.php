<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Detail of Book</title>
</head>
<body>
<div class="ui container" style="margin-top:2rem;">
        <?php if(empty($book)) :?>
            <div class="ui alert">
                <p>Aucune donnée reçue</p>
            </div>
        <?php else: ?>
            <table class="ui celled striped table">
        

                <thead>
                    <tr>
                        <th colspan="3"><strong> Detail of </strong> <h1 class=""><?= isset($book) ? $book['nom'] : 'Default'?></h1></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <i class="book icon"></i> Book Author
                        </td>
                        <td><?= $book['author'] ?></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="book icon"></i> Book Price
                        </td>
                        <td><?= $book['price'] ?></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="book icon"></i> Book Content Type
                        </td>
                        <td><?= $book['content_type'] ?></td>
                    </tr>
                </tbody>
            </table> <br>
            <table class="ui celled striped table">
        

                <thead>
                    <tr>
                        <th colspan="3"><strong>Referenced Bibliothèque </strong> <h1 class=""><?= $bibliotheque['libelle']?></h1></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <i class="user icon"></i> Bibliotheque detentor
                        </td>
                        <td><?= $bibliotheque['detenteur'] ?></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="home icon"></i> Bibliotheque Place
                        </td>
                        <td><?= $bibliotheque['emplacement'] ?></td>
                    </tr>
                </tbody>
            </table>   
        <?php endif?>
    
    <button class="ui labeled icon orange button">
        <i class="left chevron icon"></i>
        <a href="http://localhost/Projet_MVC/Bookcontroller/index">Retour vers la liste</a>
    </button>
</div>    
</body>
</html>