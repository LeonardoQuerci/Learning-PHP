<?php 
    class Aluno{
        public $nome;
        public $nota;

        function __construct($nome, $nota) {
            $this->nome = $nome;
            $this->nota = $nota;
        }

        function display() {
            echo $this->nome . " - Nota: " . $this->nota . "<br>";
        }
    }

    class Turma{
        public $alunos =array();

        function addAluno($a){
            array_push($this->alunos,$a);
        }

        function listarAlunos(){
            foreach ($this->alunos as $aluno){
                $aluno->display();
            }
        }
    }
    $t=new Turma();
    $t->addAluno(new Aluno("Joao",8.5));
    $t->addAluno(new Aluno("Leonardo",10));
    $t->listarAlunos();
?>