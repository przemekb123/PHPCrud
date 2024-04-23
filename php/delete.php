<?php

include "connect.php";

if($con->connect_error){
    die("Blad polaczenia z baza danych" . $con->connect_error);
}

if(isset($_GET['delid'])){
    $id = $_GET['delid'];

    $sql = "DELETE FROM uzytkownicy WHERE ID =$id";
    $result = $con ->query($sql);

    if ($result === TRUE) {
        header("location: Display.php" );
       
    } else {
        echo "Błąd podczas usuwania rekordu: " . $con->error;
    }
}
