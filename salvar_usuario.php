<?php
global $conn;
switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $email = $_POST["email"];
            $datanas = $_POST["datanas"];
            $nivel = $_POST["nivel"];
            $sql = "INSERT INTO dados (nome, sobrenome, email, datanas, nivel) VALUES ('$nome','$sobrenome','$email','$datanas','$nivel')";
            #$res = $conn ->query($sql);
            #Esse If copiei do Professor, funciona muito melhor com o XAMPP
            if ($conn->query($sql) === TRUE) {
                echo "<h1>Registro Inserido com Sucesso</h1>";
                echo "<a href='index.php'><input type='button' value='Voltar'></a></center>";
            } else {
                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
            }
            break;
    case 'editar':
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $datanas = $_POST["datanas"];
        $nivel = $_POST["nivel"];

        $sql = "UPDATE dados SET 
                nome='{$nome}',
                sobrenome='{$sobrenome}',
                email = '{$email}',
                datanas = '{$datanas}',
                nivel = '{$nivel}'
            WHERE
                id =".$_REQUEST["id"];

        if ($conn->query($sql) === TRUE) {
            echo "<h1>Registro Editado com Sucesso</h1>";
            echo "<a href='index.php'><input type='button' value='Voltar'></a></center>";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM dados WHERE id=".$_REQUEST["id"];

       #$res = $conn->query($sql);

       #if($res === TRUE) {
        if($conn ->query($sql) === TRUE) {
           print "<script>alert('Excluido com sucesso');</script>";
           print "<script>location.href='?page=listar';</script>";
       }else{
           print "<script>alert('Não foi possivel excluir');</script>";
           print "<script>location.href='?page=listar';</script>";
       }
        break;
}
