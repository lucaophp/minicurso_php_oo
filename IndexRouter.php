<?php
class IndexRouter{
    private $url;
    private $controller;
    private $controllerName;
    private $action;
    private $att;
    public function __construct(Array $url,$x){
        $this->url=$url;
        if((!is_integer($x))||(!is_array($url))){
            return;
        }
        if($x==0){
            $this->setController('inicio');
            
        }
        
            
        if($x>0){
            $this->setController($url[0]);
        }
        if((!isset($url[1])||$url[1]=="")){
            $this->callAction("index");
        }
        if($x==2){
            $this->callAction($url[1]);
            
        }
        if($x>2){
            $this->callAction($url[1],2,$x);
        }
        
    }
    public function setController($controle){
        $controle=ucfirst($controle);
        $controle.="Controller";
        $this->controllerName=$controle;
        
        $this->controller=new $controle();
    }
    public function callAction($action,$inicio=null,$fim=null){
        
        $this->action=$action;
        
        $this->att=array();
        for($i=$inicio;$i<$fim;$i++){
            $this->att[$i-$inicio]=$this->url[$i];
        }

        if(method_exists($this->controllerName,$this->action)){
            
            $this->controller->$action($this->att);
            
        }else{
            $_SESSION['conteudo']="view/Errors/404.php";
            $this->controller->__destruct();
        }
        
        
        
    }
}