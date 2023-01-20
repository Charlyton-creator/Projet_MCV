<?php
require_once('AbstractController.php');
class Bookcontroller extends AbstractController{
    /**
     * cette methode affiche la liste des elements
     * @author Charles
     * @return void
     * @param null
     */
    public function index(){
       //chargmement du model book
       $this->loadModel('book');
       //recuperer la liste des books et les stocker dans un tableau
       $books = $this->Book->getAll();
       //appel de la fonction render() pour charger la vue
       $this->render('index', ['books' => $books]);
    }
    /**
     * 
     */
    public function detail(int $id){
        //chargmement du model book
       $this->loadModel('book');
       //recuperer la liste des books et les stocker dans un tableau
       $book = $this->Book->getOne($id);
       $this->Book->setTable2('bibliotheques');
       $bibliotheque = $this->Book->getOne2($id, "bibliotheque_id");
       //appel de la fonction render() pour charger la vue
       $this->render('read', compact('book', 'bibliotheque'));
    }
    /**
     * 
     */
    public function delete(int $id){
        //chargmement du model book
        $this->loadModel('book');
        //recuperer la liste des livres et les stocker dans un tableau
        $this->Book->delete($id);
        $books = $this->Book->getAll();
        //appel de la fonction render() pour charger la vue
        $this->render('index', ['books' => $books]);
    }
    /**
     * 
     */
    public function create(){
        //chargmement du model book
        $this->loadModel('book');
        //creation de l'article
        $this->Book->create($_POST);
        //recuperer la liste des articles et les stocker dans un tableau
        $books = $this->Book->getAll();
        //appel de la fonction render() pour charger la vue
        $this->render('index', ['books' => $books]);
    }
    /**
     * 
     */
    public function newbook($books = []){
        //load bibliotheque model and retrieve all bibliotheque available
        $this->loadModel('bibliotheque');
        //get all the bibliotheques
        $bibliotheques = $this->Bibliotheque->getAll();
        $this->render('create', compact('books', 'bibliotheques'));
    }
    /**
     * 
     */
    public function updatebook(int $id){
        //chargmement du model book
       $this->loadModel('book');
       //recuperer la liste des books et les stocker dans un tableau
       $book = $this->Book->getOne($id);
       //appel de la fonction render() pour charger la vue
       $this->render('update', ['book' => $book]);
    }
    /**
     * 
     */
    public function update(int $id){
         //chargmement du model book
         $this->loadModel('book');
         //creation de l'article
         $this->Book->update($_POST, $id);
         //recuperer la liste des articles et les stocker dans un tableau
         $books = $this->Book->getAll();
         //appel de la fonction render() pour charger la vue
         $this->render('index', ['books' => $books]);
    }
}
?>