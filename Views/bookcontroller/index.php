
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
                        <i class="book icon"></i> <a href="http://localhost/Projet_MVC/Bookcontroller/newbook" style="color:white;">Add Book</a>
                    </div>
                </th>
                </tr>
                <tr>
                    <th>Libelle</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Content Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $book) :?>
                    <tr>
                        <td><?= $book['nom']?></td>
                        <td><?= $book['author']?></td>
                        <td><?= $book['price']?></td>
                        <td><?= $book['content_type']?></td>
                        <td>
                        <div class="ui small button">
                            <a href="http://localhost/Projet_MVC/Bookcontroller/detail/<?= $book['id']?>">Details</a>
                        </div>
                        <div class="ui small orange button">
                            <a href="http://localhost/Projet_MVC/Bookcontroller/updatebook/<?= $book['id']?>">Update</a>
                        </div>
                        <div class="ui small red button">
                            <a href="http://localhost/Projet_MVC/Bookcontroller/delete/<?= $book['id']?>">Delete</a>
                        </div>    
                    </tr>
                <?php endforeach ?>
                  
            </tbody>
        </table>
    </div>
    
</body>
</html>