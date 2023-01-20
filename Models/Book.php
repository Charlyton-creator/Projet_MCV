<?php
require_once('AbstractModel.php');
class Book extends AbstractModel{  
     public function __construct(){
        $this->setTable('books');
        $this->initDB();
     }
     /**
      * creer un nouvel enregistrement de livre
      * @author Charles
      * @param array $book
      * @return void
      */
      public function create(array $book){
         $req = "INSERT INTO books(nom, price, author,content_type, bibliotheque_id) VALUES(:nom, :price, :author, :content_type, :bibliotheque_id)";
         $query = $this->connexion->prepare($req);
         $query->bindValue('nom', $book['nom'], PDO::PARAM_STR);
         $query->bindValue('price', $book['price'], PDO::PARAM_INT);
         $query->bindValue('author', $book['author'], PDO::PARAM_STR);
         $query->bindValue('content_type', $book['content_type'], PDO::PARAM_STR);
         $query->bindValue('bibliotheque_id', $book['bibliotheque_id'], PDO::PARAM_INT);
         $query->execute();
      }

      /**
       * mettre a jour un enregistrement de livre
       * @author Charles
       * @param array $book
       * @param int $id
       * @return void
       * 
       */
      public function update(array $book, int $id){
        $req = "UPDATE books SET nom=:nom, price=:price, author=:author, content_type=:content_type, bibliotheque_id=:bibliotheque_id WHERE id=".$id;
        $query = $this->connexion->prepare($req);
        $query->bindValue('nom', $book['libelle'], PDO::PARAM_STR);
        $query->bindValue('price', $book['price'], PDO::PARAM_INT);
        $query->bindValue('author', $book['author'], PDO::PARAM_STR);
        $query->bindValue('content_type', $book['content_type'], PDO::PARAM_STR);
        $query->bindValue('bibliotheque_id', $book['bibliotheque_id'], PDO::PARAM_INT);
        $query->execute();
     }
}
?>