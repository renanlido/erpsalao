<?php
header('Content-Type: application/json');
$data = 0;

if (isset($_GET['id'])) {
  require_once "../config.php";

  $cliente_id = $_GET['id'];

  if ($result = $mysqli->query("SELECT * FROM cadastro WHERE id = '$cliente_id'")) {
    $data = $result->fetch_object();
    $result->close();
  }

  $mysqli->close();
}

json_encode($data);
echo json_encode($data);
?>
