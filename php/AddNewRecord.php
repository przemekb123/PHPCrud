<?php
include "connect.php";


if(isset($_POST['addUser'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $nrtel = $_POST['nrtel'];

    //$query = "UPDATE dane SET imie='$imie', nazwisko='$nazwisko', nrtel='$nrtel' WHERE  ID='$ID' " ; <-- Aktualizowanie rekordu w bazie danych
    $query = "insert into uzytkownicy (imie,nazwisko,nrtel) values ('$imie','$nazwisko','$nrtel')";
    //$query->execute();
    //$query->close();
   // $con->close();
    $query_run = mysqli_query($con, $query);

    if($query_run){
        header('location: Display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dodaj uzytkownika</title>
    <script src="../js/back.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="../css/formStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/BtnStyle.css">

</head>
<body>
<div class="container">

    <div class="form-background">

        <span class="material-symbols-outlined mouse-pointer" id="back-site" onclick="back()">
            arrow_back
        </span>

        <h1>Dodaj Uzytkownika</h1>
        <form id="Form" method="post" class="form">

            <div class="form-input">
            <label >Imie</label><br>
            <input type="text"  name="imie" placeholder="Wpisz imie" required><br><br>
            </div>

            <div class="form-input">
            <label >Nazwisko</label><br>
            <input type="text"  name="nazwisko" placeholder="Wpisz nazwisko" required><br><br>
            </div>

            <div class="form-input">
            <label >Numer Telefonu</label><br>
            <input type="text"  name="nrtel" placeholder="Wpisz numer telefonu" required><br><br>
            </div>

            <button type="submit" class="btn-db btn-add mouse-pointer" name="addUser">Dodaj uzytkownika</button>


        </form>
    </div>
</div>

</body>
</html>

