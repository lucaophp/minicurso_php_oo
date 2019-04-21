<?php
class ContatoPersistence extends Persistence{
    private $model; 
    public function __construct($obj=null){
        if($obj instanceof Contato){
            $this->model=$obj;
        }
    }
    public function insert(){
        $arr=$this->model->toArray();
        if(parent::insert("contato",$arr)){
            return true;
        
        }
        return false;
    }
    public function getAll(){
        $arr=array();
        
        foreach(parent::listar("contato") as $x){
            $arr[]=new Contato($x);
        }
        return $arr;
    }
}