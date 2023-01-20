<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Page for Adding a new bibliotheque</title>
</head>
<body>
    <h1 align="center">Ajouter un nouveau Bibliothèque</h1>
    <div class="ui inverted segment container" style="margin-top:2rem;">
        <form action="http://localhost/Projet_MVC/Bibliothequecontroller/create" method="post">
            <div class="ui inverted form">
                <div class="two fields">
                    <div class="field">
                        <label>Libelle of the Bibliotheque</label>
                        <input placeholder="Le savoir" type="text" name="libelle">
                    </div>
                    <div class="field">
                        <label>Bibliotheque Detentor</label>
                        <input placeholder="Abdel Hakim A. Layele" type="text" name="detenteur">
                    </div>
                </div>
                <div class="field">
                    <label>Bibliotheque place</label>
                    <input placeholder="Lome" type="text" name="emplacement">
                </div>
                <input type="submit" class="ui submit positive button">
            </div>
        </form>
    </div>
</body>
</html>