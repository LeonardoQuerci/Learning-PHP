<?php
    require_once "avancado1.php";
    require_once "avancado1-1.php";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['gravar'])){
            $keyId=$_POST['id'];
            $keyNome=$_POST['nome'];
            $keyCpf=$_POST['cpf'];
            $keyEmail=$_POST['email'];
            $objeto1= new Aluno($keyId,$keyNome,$keyCpf,$keyEmail);
            $objeto1->salvar();
        }
        if(isset($_POST['visualizar'])){
            $keyId=$_POST['id'];
            Aluno::buscar($keyId);
        }

        if(isset($_POST['CarregarArray'])){
            $t= new Turma();
            $t->carregarAlunos();
            $t->exibir();
        }
    }
?>