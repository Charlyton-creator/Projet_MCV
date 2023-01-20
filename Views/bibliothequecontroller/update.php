
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Page for updating a bibliotheque</title>
</head>
<body>
    <h1 align="center">Modifier la bibliotheque</h1>
    <div class="ui inverted segment container" style="margin-top:2rem;">
        <form action="http://localhost/Projet_MVC/Bibliothequecontroller/update/<?= $bibliotheque['id']?>" method="POST">
            <div class="ui inverted form">
                <div class="two fields">
                    <div class="field">
                        <label>Libelle of the Bibliotheque</label>
                        <input placeholder="Le premier Amour est toujours le dernier" type="text" name="libelle" value="<?= $bibliotheque['libelle']?>">
                    </div>
                    <div class="field">
                        <label>Bibliotheque detentor</label>
                        <input placeholder="Abdel Hakim A. Layele" type="text" name="detenteur" value="<?= $bibliotheque['detenteur']?>">
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Bibliotheque place</label>
                        <input placeholder="" type="text" name="emplacement" value="<?= $bibliotheque['emplacement']?>">
                    </div>
                    <div class="field">
                        <input placeholder="" type="hidden" name="id" value="<?= $bibliotheque['id']?>">
                    </div>
                </div>
                <input type="submit" value="Modifier" class="ui submit positive button">
            </div>
        </form>
    </div>
</body>
</html>