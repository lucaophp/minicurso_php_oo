<?php

function __autoload($classe){
    require_once("persistence/Persistence.php");
    if(file_exists("model/{$classe}.php")){
        require_once("model/{$classe}.php");
    }else if(file_exists("controller/{$classe}.php")){
        require_once("controller/{$classe}.php");
        
    }else if(file_exists("persistence/{$classe}.php")){
        
        require_once("persistence/{$classe}.php");
    
    }else if(file_exists("{$classe}.php")){
        require_once("{$classe}.php");
        if(method_exists("{$classe}","main")){
            
            $classe::main();
            
        }
    }
}
