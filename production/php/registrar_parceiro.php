<?php
    require_once ('conecta_db.php');

    $nomeSobrenome =  $_POST['nome_sobrenome'];
    $emailParceiro = $_POST['email_parceiro'];
    $senhaParceiro =  md5($_POST['senha_parceiro']);
    $parceiroRedessocial = $_POST['parceiro_redesocial'];

    $objDb = new db ();
    $link = $objDb->conecta_mysql();

    $sql = " insert into tb_cadastro(nomeSobrenome, email, senha, parceiroRedesocial)
            values ('$nomeSobrenome', '$emailParceiro', '$senhaParceiro', '$parceiroRedessocial')";

    //executar a query
    if (mysqli_query($link, $sql)) {
        echo 'Usuário registrado com sucesso';
    } else {
        echo 'Erro ao registrar usuário';
    };

    ?>