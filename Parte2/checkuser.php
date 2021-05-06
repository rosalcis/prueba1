<?php
//dades de connexió
$server = "localhost";
$user = "user_test";
$password = "user_test";
$database = "user_test";

sleep(1); //temps d’espera. Es pot comentar si vols que sigui 0

//connexió a la base de dades
$conn = new mysqli($server, $user, $password, $database);

//comprovem connexió
if ($conn->connect_error) {
  return "DATABASE ERROR: ".$conn->connect_error;
  die();
}

if(!empty($_POST["usuari"])) { //si s’han enviat dades pel post
  $usuari = $_POST["usuari"];
  $sql = "SELECT * FROM users WHERE username='$usuari'"; //construïm consulta

  //llancem la consulta
  $result = $conn->query($sql);

  if ($result->num_rows == 0) { //si no hi ha resultats, el nom d’usuari està disponible
    echo "disponible";
  }else{ //si no, es que ja està utilitzat.
    echo "no disponible";
  }
}

//close connection
$conn->close();
?>
