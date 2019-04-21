<?php
class InicioController{
    public function index(){
        
    }

    public function contato(){
        if(isset($_POST['contato'])){
            unset($_POST['contato']);
            $contato=(new Contato($_POST));
            $pContato = new ContatoPersistence($contato);
            if(!$pContato->insert()){
                $_SESSION['msg']=
                     '<div class="alert alert-danger" role="alert">
                         Não foi possivel contactar!!!
                      </div>';
            }else{
                $_SESSION['msg']=
                     '<div class="alert alert-success" role="alert">
                         Contato feito com sucesso!!!
                      </div>';
            }
        }
        $_SESSION['conteudo']='view/contato.php';
        
    }
    public function __destruct() {
       require_once("view/tema.php");
    }
}