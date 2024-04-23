<?php
session_start();

$con = mysqli_connect("localhost","root","","test");



$ID = $_POST['id'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$nrtel = $_POST['nrtel'];

$query = "UPDATE uzytkownicy SET imie='$imie', nazwisko='$nazwisko', nrtel='$nrtel' WHERE  ID='$ID' " ; //<-- Aktualizowanie rekordu w bazie danych

$query_run = mysqli_query($con, $query);

 if($query_run){
     $_SESSION['status'] = "Zaktualizowano baze danych!";
         header("Location: bdanych.php" );
 }else{
    $_SESSION['status'] = "Blad! Nie zaktualizowano baze danych!";
   header("Location: bdanych.php" );
 }

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Formularz</title>
</head>
<body>
<form id="myForm">
    <label for="field1">Pole 1:</label>
    <input type="text" id="field1" name="field1" required><br><br>

    <label for="field2">Pole 2:</label>
    <input type="text" id="field2" name="field2" required><br><br>

    <label for="field3">Pole 3:</label>
    <input type="text" id="field3" name="field3" required><br><br>

    <label for="field4">Pole 4:</label>
    <input type="text" id="field4" name="field4" required><br><br>

    <input type="button" value="Dodaj" onclick="submitForm()">
</form>

<script>
    function submitForm() {
        var form = document.getElementById("myForm");
        var formData = new FormData(form);
        var values = {};

        for (var pair of formData.entries()) {
            values[pair[0]] = pair[1];
        }

        console.log(values);
        // Wykonaj dowolną operację z wartościami formularza, np. zapisz je w bazie danych
        // lub wyślij przez AJAX

        // Opcjonalnie wyczyść formularz po dodaniu wartości
        form.reset();
    }
</script>
</body>
</html>


