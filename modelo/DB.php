<?php

$mysqli = new mysqli("localhost", "root", "vargas1324", "SistemaPreoped");


if (mysqli_connect_errno()) {
    printf("Fallo en la conexion", $mysqli->connect_errno);
    exit();
}
/* //LLENAR DB
 $nombre=DB;
for($i=0;$i<10;$i++){
    $query = "INSERT INTO `Asignatura` (`id`, `nombre`) VALUES (NULL, '$nombre')"; 
    $result = $mysqli->query($query);

}

 */
$query = "SELECT id,nombre FROM Asignatura";
$result = $mysqli->query($query);

$row = $result->fetch_array(MYSQLI_ASSOC); // NUM busca por id, ASSOC busca por nombre del campo, BOTH por ambas
printf("%s %s  ", $row["id"],$row["nombre"]);


$result->free();

//phpinfo();

?>        



