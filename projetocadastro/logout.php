<?php
    include('cria_sessao.php');
    //lipar as variaveis da sessão
    session_unset();
    //destroi a sessão
    session_destroy();
    //voltar para a pagina inicial
    header('location: index.php')
?>