<?php
if (!isset($_GET['id'])) {
  echo 0;
} else {
  require_once "../config.php";

  $query = "UPDATE cadastro SET

    nome_completo = '" . $_POST['nome_compl'] . "',
    tel = '" . $_POST['tel'] . "',
    cel = '" . $_POST['cel'] . "',
    email = '" . $_POST['email'] . "',
    niver = '" . $_POST['niver'] . "',
    cep = '" . $_POST['cep'] . "',
    endr = '" . $_POST['end'] . "',
    num = '" . $_POST['num'] . "',
    comp = '" . $_POST['comp'] . "',
    bairro = '" . $_POST['bairro'] . "',
    cidade = '" . $_POST['cidade'] . "',
    uf = '" . $_POST['uf'] . "',
    obs = '" . $_POST['obs'] . "'

    WHERE id = '" . $_GET['id'] . "'";

  if ($result = $mysqli->query($query)) {

    echo 1;
  } else {
    echo 0;
  }

  $mysqli->close();
  }

?>
