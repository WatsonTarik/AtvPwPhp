<?php

extract($_POST);

$dado = $nome."\r\n".$cargo."\r\n".$salario."\r\n".$depend."\r\n";

$refFile = fopen("infFuncionarios/$id.txt", "a+");

fwrite($refFile, $dado);

fclose($refFile);

$file = scandir("infFuncionarios");   

$size = count($file);


for ($i=0; $i < $size; $i++) {
    if($file[$i] != '.' && $file[$i] != '..'){
        echo '<a href=readinfo.php?id='.$file[$i].'>'.$file[$i];
        echo '<br>';
    }
}

?>