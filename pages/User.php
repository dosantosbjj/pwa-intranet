<?php
include("./Conexao.php");

class User{

    public  $nome;
    public  $endereco;
    public  $email;
    public  $identidade;
    public  $setor;
    public  $cargo;
    public  $tipo;
    public  $usuario;
    public  $senha;

function newUser(){
    if(isset($_POST['nome'] & $_POST['endereco'] & $_POST['email'] & $_POST['identidade'] & $_POST['setor'] & $_POST['cargo'] & $_POST['tipo'] & $_POST['usuario'] & $_POST['senha'])){
        $nome = strip_tags($_POST['nome']);
        $endereco = strip_tags($_POST['endereco']);
        $email = strip_tags($_POST['email']);
        $identidade = strip_tags($_POST['identidade']);
        $setor = strip_tags($_POST['setor']);
        $cargo = strip_tags($_POST['cargo']);
        $tipo = strip_tags($_POST['tipo']);
        $usuario = strip_tags($_POST['usuario']);
        $senha= strip_tags($_POST['senha']);
    }
    try{
    $sql->Conexao::getInstance();
    $sql->prepare("INSERT INTO USUARIO VALUES (' ', ?, ?, ?, ?, ?, ?, ?, ?,'')");
    $sql->execute(array('',$nome,$endereco,$email,$identidade,$setor,$cargo,$tipo,$usuario,$senha,''));
    echo $sql->rowCount();
    }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
        }
    }
}
?>