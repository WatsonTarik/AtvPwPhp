<?php

$id =$_GET['id'];

$infFuncionarios = file("infFuncionarios/$id");

foreach($cadastro as $texto){
    echo "$texto <br>";
}