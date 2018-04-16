
<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">
    

</form>



<?php 

if(isset($_GET)){
    foreach($_GET as $key => $valor){
        echo "Nome do campo: $key";
        echo "<br>Valor do campo: $valor";

        echo "<hr>";

    }
}


//$meses = array("Janeiro", "fevereiro", "março","Abril","maio","Junho","Julho","Agosto","setembro","Outubro","Novembro","Dezembro");
//
//foreach($meses as $index => $mes){
//    echo "indice: $index: ";
//    echo "O mes é $mes <br>";
//}

?>