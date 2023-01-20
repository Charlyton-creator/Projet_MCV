
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Page for List of Books</title>
</head>
<body>
    <div class="ui container" style="margin-top:2rem;">
        <table class="ui compact celled table">
            <thead>
                <tr>
                <th colspan="0">
                    <div class="ui right floated small primary labeled icon button">
                        <i class="home icon"></i> <a href="http://localhost/Projet_MVC/Bibliothequecontroller/newbibliotheque" style="color:white;">Add Bibliotheque</a>
                    </div>
                </th>
                </tr>
                <tr>
                    <th>Libelle</th>
                    <th>Detenteur</th>
                    <th>Emplacement</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($bibliotheques as $bibliotheque) :?>
                    <tr>
                        <td><?= $bibliotheque['libelle']?></td>
                        <td><?= $bibliotheque['detenteur']?></td>
                        <td><?= $bibliotheque['emplacement']?></td>
                        <td>
                        <div class="ui small button">
                            <a href="http://localhost/Projet_MVC/Bibliothequecontroller/detail/<?= $bibliotheque['id']?>">Details</a>
                        </div>
                        <div class="ui small orange button">
                            <a href="http://localhost/Projet_MVC/Bibliothequecontroller/updatebibliotheque/<?= $bibliotheque['id']?>">Update</a>
                        </div>
                        <div class="ui small red button">
                            <a href="http://localhost/Projet_MVC/Bibliothequecontroller/delete/<?= $bibliotheque['id']?>">Delete</a>
                        </div>    
                    </tr>
                <?php endforeach ?>    
            </tbody>
        </table>
    </div>
    
</body>
</html>