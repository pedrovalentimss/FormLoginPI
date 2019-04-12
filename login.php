<?php
    $user=$_POST['usuario'];
    $pass=$_POST['senha'];
    $submit=$_POST['submit'];
    
    /* Declaração das variáveis que possuem os usuarios e as senhas */
    $user1 = 'teste';
    $pass1 = '12345';
    
    /* Testa se o botão submit foi ativado */
    if($submit)
    {
        if($user == "" || $pass == "")
        {
            echo "<script>alert('Por favor, preencha todos os campos!');</script>";
        } else 
        {
            if($user == $user1 && $pass == $pass1)
            {
                header("Location: index.html"); 
            }
            else
            {
                echo "<script>alert('Senha ou usuário incorretos!');</script>";
            }
        } 
    }
?>