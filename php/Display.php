<?php
    include 'connect.php';
?>


<!DOCTYPE html>
<html>
<head>
    <script src="../js/DelContentBox.js"></script>
    <script src="../js/EditRecord.js"></script>
    <script src="../js/addNewUser.js"></script>
    <title>Panel administracyjny</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<main>

<div class="container">

    <div class="table">
    <table>

        <tr>
            <th scope="col">ID</th>
            <th scope="col">Imie</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Numer telefonu</th>
            <th scope="col">Operacja</th>

        </tr>

    <?php

    $sql = "SELECT * FROM uzytkownicy ";

    $wyniki = mysqli_query($con, $sql); //Zmienna $con przekazywana z pliku connect.php
    if($wyniki){
        while($row = mysqli_fetch_assoc($wyniki)){
            $ID = $row['ID'];
            $imie = $row['imie'];
            $nazwisko = $row['nazwisko'];
            $nrtel = $row['nrtel'];
            echo ' <tr>
             <th scope="row">'.$ID.'</th>
            <td>'.$imie.'</td>
             <td>'.$nazwisko.'</td>
              <td>'.$nrtel.'</td>
              <td>
              <button class="btn-db btn-delete" onclick="showConfirmationBox(' . $ID . ')">Usun </button> 
              <button class="btn-db btn-edit" onclick="editRecord('.$ID.')">Edytuj</button>
              </td>
            </tr>
            <br>';
        }

    }

    ?>

    </table>
        <div class="add-user">
            <button class="btn-db btn-add-user" onclick="addNewUser()">Dodaj uzytkownika</button>
        </div>
    </div>



<div class="content-box" id="confirmation-box">
    <p>Czy na pewno chcesz usunąć ten rekord?</p>
    <button class="btn-content-box-accept" onclick="deleteRecord()">Tak</button>
    <button class=" btn-content-box-denied" onclick="cancelDelete()">Nie</button>
</div>





</div>


</main>

</body>