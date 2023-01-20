<?php
require_once('AbstractModel.php');
class Bibliotheque extends AbstractModel{  
     public function __construct(){
        $this->setTable('bibliotheques');
        $this->initDB();
     }
     /**
      * creer un nouvel enregistrement de livre
      * @author Charles
      * @param array $bibliothèque
      * @return void
      */
      public function create(array $bibliotheque){
         $req = "INSERT INTO bibliotheques(libelle, emplacement, detenteur) VALUES(:libelle, :emplacement, :detenteur)";
         $query = $this->connexion->prepare($req);
         $query->bindValue('libelle', $bibliotheque['libelle'], PDO::PARAM_STR);
         $query->bindValue('emplacement', $bibliotheque['emplacement'], PDO::PARAM_STR);
         $query->bindValue('detenteur', $bibliotheque['detenteur'], PDO::PARAM_STR);
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
      public function update(array $bibliotheque, int $id){
        $req = "UPDATE bibliotheques SET libelle=:libelle, emplacement=:emplacement, detenteur=:detenteur WHERE id=".$id;
        $query = $this->connexion->prepare($req);
        $query->bindValue('libelle', $bibliotheque['libelle'], PDO::PARAM_STR);
        $query->bindValue('emplacement', $bibliotheque['emplacement'], PDO::PARAM_STR);
        $query->bindValue('detenteur', $bibliotheque['detenteur'], PDO::PARAM_STR);
        $query->execute();
     }

}
?>