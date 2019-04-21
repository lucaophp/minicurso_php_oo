<?php
class Config{
    public static $prefixoDB;
    public static $dir;
    public static $dirModel;
    public static $dirController;
    public static $dirView;
    public static $url;
    public static function startDB($server,$user,$pass,$db){
        return Persistence::conecta($server,$user,$pass,$db);
    }
    public static function main($args=null){
        
        $server="localhost";
        $user="root";
        $pass="lucas123";
        $dbname="lanchonete";
        self::$prefixoDB="";
        if(!(self::startDB($server,$user,$pass,$dbname))){
            echo("Erro na conexão");
        }
        if(isset($_GET['action'])){
            self::$url=$_GET['action'];
            self::$url=explode("/",self::$url);
            
            $x=0;
            foreach(self::$url as $i=>$a){
                $a=trim($a);
                if(isset($a)&&($a!="")){
                    $x++;
                }else{
                    break;
                }
                
            }
            $index=new IndexRouter(self::$url,$x);
            
        }else{
            
            $index=new IndexRouter(array(),0);
        }
    }
}