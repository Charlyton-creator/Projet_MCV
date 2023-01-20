<?php
abstract class AbstractModel{
    //atributs pour la connexion à la BD
    protected $host = "localhost";
    protected $dbname = "projet_mvc";
    protected $username = "root";
    protected $password = "";
    
    //propriete qui contient une instance de la connexion à la BD
    protected $connexion;

    protected $table;

    protected $table2;

    protected $column;
    

    //initialisation de la BD
    public function initDB(){
        # code...
        try {
            //code...
            $this->connexion = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->username, $this->password);
        } catch (\PDOException $th) {
            //throw $th;
            echo "Erreur de connexion à la BD".$th->getMessage();
        }
        
    }

    /**
     * methode pour recuperer un enregistrement en fonction de l'id
     * @param id
     * @return Array
     */
    public function getOne(int $id){
        $req = "SELECT * FROM $this->table WHERE id=$id";
        $query = $this->connexion->prepare($req);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    /**
     * methode pour recuperer un enregistrement de la deuxieme table en connaisant l'id d'un enregistrement de la première table
     */
    public function getOne2(int $id, string $column){
        $req = "SELECT * FROM $this->table2 INNER JOIN $this->table ON $this->table2.id=$this->table.$column WHERE $this->table.id=$id";
        $query = $this->connexion->prepare($req);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    /**
     * methode pour recuperer tous les enregistrements
     * @return Array
     */
    public function getAll(){
        $req = "SELECT * FROM $this->table";
        $query = $this->connexion->prepare($req);
        $query->execute();
        return $query->fetchAll();
    }
    /**
     * get all elements linked to the second table in table 1
     */
    public function getAll2(int $id, string $column){
        $req = "SELECT * FROM $this->table LEFT JOIN $this->table2 ON $this->table2.id=$this->table.$column WHERE $this->table2.id=$id";
        $query = $this->connexion->prepare($req);
        $query->execute();
        return $query->fetchAll();
    }
    /**
     * methode pour supprimer un enregistrement a partir de l'id
     * @param int $id
     * @return void
     */
    public function delete(int $id){
        $req = "DELETE FROM $this->table WHERE id=:id";
        $query = $this->connexion->prepare($req);
        $query->bindValue('id', $id, PDO::PARAM_INT);
        $query->execute();
    }

    //getters et setters
    public function getConnexion(){
        return $this->connexion;
    }
    public function setConnexion($con){
        $this->connexion = $con;
    }
    public function getTable(){
        return $this->table;
    }
    public function setTable($tab){
        $this->table = $tab;
    }
    public function getTable2(){
        return $this->table2;
    }
    public function setTable2($tab){
        $this->table2 = $tab;
    }
}
?>