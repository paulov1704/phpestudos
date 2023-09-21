<?php
    $nome = isset($_GET['nome']) ?$_GET['nome']: ["não informado"] ;
    $ano = isset($_GET['ano']) ?$_GET['ano']: 0;
    $sexo = isset($_GET['sexo']) ?$_GET['sexo']: ["sem sexo"];

    $idade = date("Y") - $ano;

    print "Seu nome é $nome, sua idade é $idade e você é $sexo"
?>