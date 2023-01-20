<?php
abstract class AbstractController{
   //charger le model 
    public function loadModel($model){
        $model = ucfirst($model);
        require_once(ROOT.'Models/'.$model.'.php');
        $this->$model = new $model();
    }
    /**
     * fonction générique pour charger une vue avec 
     * ses données
     * @author Charles
     * @param string $vue
     * @param array $data
     * @return void
     */
    public function render(string $vue, array $data = []){
        //recuperer les clés du tableau data sous forme de variables
        extract($data);

        //contruction du chemin vers la vue
        require_once(ROOT.'Views/'.strtolower(get_class($this)).'/'.$vue.'.php');
    }
}

?>