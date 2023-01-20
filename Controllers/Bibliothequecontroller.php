<?php
require_once('AbstractController.php');
class Bibliothequecontroller extends AbstractController{
    /**
     * cette methode affiche la liste des elements
     * @author Charles
     * @return void
     * @param null
     */
    public function index(){
       //chargmement du model book
       $this->loadModel('bibliotheque');
       //recuperer la liste des books et les stocker dans un tableau
       $bibliotheques = $this->Bibliotheque->getAll();
       //appel de la fonction render() pour charger la vue
       $this->render('index', ['bibliotheques' => $bibliotheques]);
    }
    /**
     * 
     */
    public function detail(int $id){
        //chargmement du model book
       $this->loadModel('bibliotheque');
       //recuperer la liste des books et les stocker dans un tableau
       $bibliotheque = $this->Bibliotheque->getOne($id);
       $this->Bibliotheque->setTable('books');
       $this->Bibliotheque->setTable2('bibliotheques');
       $books = $this->Bibliotheque->getAll2($id, "bibliotheque_id");
       //appel de la fonction render() pour charger la vue
       $this->render('read', compact('bibliotheque', 'books'));
    }
    /**
     * 
     */
    public function delete(int $id){
        //chargmement du model book
        $this->loadModel('bibliotheque');
        //recuperer la liste des livres et les stocker dans un tableau
        $this->Bibliotheque->delete($id);
        $bibliotheques = $this->Bibliotheque->getAll();
        //appel de la fonction render() pour charger la vue
        $this->render('index', ['bibliotheques' => $bibliotheques]);
    }
    /**
     * 
     */
    public function create(){
        //chargmement du model book
        $this->loadModel('bibliotheque');
        //creation de l'article
        $this->Bibliotheque->create($_POST);
        //recuperer la liste des articles et les stocker dans un tableau
        $bibliotheques = $this->Bibliotheque->getAll();
        //appel de la fonction render() pour charger la vue
        $this->render('index', ['bibliotheques' => $bibliotheques]);
    }
    /**
     * 
     */
    public function newbibliotheque($bibliotheques = []){
        $this->render('create', ['bibliotheques' => $bibliotheques]);
    }
    /**
     * 
     */
    public function updatebibliotheque(int $id){
        //chargmement du model book
       $this->loadModel('bibliotheque');
       //recuperer la liste des books et les stocker dans un tableau
       $bibliotheque = $this->Bibliotheque->getOne($id);
       //appel de la fonction render() pour charger la vue
       $this->render('update', ['bibliotheque' => $bibliotheque]);
    }
    /**
     * 
     */
    public function update(int $id){
         //chargmement du model book
         $this->loadModel('bibliotheque');
         //creation de l'article
         $this->Bibliotheque->update($_POST, $id);
         //recuperer la liste des articles et les stocker dans un tableau
         $bibliotheques = $this->Bibliotheque->getAll();
         //appel de la fonction render() pour charger la vue
         $this->render('index', ['bibliotheques' => $bibliotheques]);
    }
}
?>