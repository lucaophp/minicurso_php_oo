<?php
class Contato{
    private $id;
    private $nome;
    private $email;
    private $mensagem;
    private $data;
    public function __construct(Array $dados){
        if(is_array($dados)){
            $this->toObject($dados);
        }
    }
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function getData() {
        return $this->data;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function toObject(Array $dados){
        $this->nome=isset($dados['nome'])?$dados['nome']:null;
        $this->id=isset($dados['id'])?$dados['id']:null;
        $this->email=isset($dados['email'])?$dados['email']:null;
        $this->mensagem=isset($dados['mensagem'])?$dados['mensagem']:null;
        $this->data=date("Y-m-d");
        
    }
    public function toArray(){
        $arr=array();
        $arr['id']=$this->getId();
        $arr['nome']=$this->getNome();
        $arr['email']=$this->getEmail();
        $arr['mensagem']=$this->getMensagem();
        $arr['data']=$this->getData();
        return $arr;
        
    }

}