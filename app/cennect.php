<?php
/* Database connexion */
define('DB_SERVER', 'db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'miliga5506@@##');
define('DB_NAME', 'FUT_CHAMP');

/* Connexion à la base de données */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* verifier connection */
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// echo "connected succefully";


$query = "SELECT *FROM players;";

$result = mysqli_query($link, $query); 
  
 
    // OUTPUT DATA OF EACH ROW 
    while($row = mysqli_fetch_assoc($result)) { 
        echo "name: " . $row["name"] 
        . " - photo: <img src=" . $row['photo'] . " /><br>"
        . " - position_p: " . $row["position_p"]. "<br>";         
    } 
 
?>
