<?php

function trataNome($name){
    if(!$name){
        throw new exception("Nenhum nome informado!",1);
    }
    
    echo ucfirst($name.'<br>');
}

try{
    
    trataNome("João");
    trataNome("");
    
}catch(exception $e){
    
    echo $e->getMessage();
    
}finally{
    echo "Executou o bloco try!";
}

?>