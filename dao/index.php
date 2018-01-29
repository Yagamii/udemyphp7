<?php

    require_once("config.php");

  //  $root = new Usuario();

  //  $root->loadById(3);

  //  echo $root;

  //Carrega lista de Usuario
  //$lista = Usuario::getList();

  //echo json_encode($lista);

  //Carrega lista de usuario por $login

  //$search = Usuario::search("t");

  //echo json_encode($search);

  //Carrega um usuário
  //$usuario = new Usuario();
  //$usuario->login("teste","123456");
  //echo $usuario;

  $aluno = new Usuario("Joao", "@resg");

  $aluno->insert();

  echo $aluno;

 ?>
