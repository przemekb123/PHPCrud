<?php
include "connect.php";

$id = $_GET['edit_id'];
$query = "SELECT * FROM uzytkownicy WHERE ID=$id";
$query_run = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($query_run);
$imie  = $row['imie'];
$nazwisko = $row['nazwisko'];
$nrtel = $row['nrtel'];
if(isset($_POST['editUser'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $nrtel = $_POST['nrtel'];

    $query = "UPDATE uzytkownicy SET imie='$imie', nazwisko='$nazwisko', nrtel='$nrtel'  WHERE ID='$id'" ; //<-- Aktualizowanie rekordu w bazie danych

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    <link rel="stylesheet" type="text/css" href="../css/formStyle.css">
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

        <h2>Edytuj dane uzytkownika</h2>
        <form id="Form" method="post" class="form">

            <div class="form-input">
                <label >Imie</label><br>
                <input type="text"  name="imie" value="<?php echo $imie?>" required><br><br>
            </div>

            <div class="form-input">
                <label >Nazwisko</label><br>
                <input type="text"  name="nazwisko" value="<?php echo $nazwisko?>" required><br><br>
            </div>

            <div class="form-input">
                <label >Numer Telefonu</label><br>
                <input type="text"  name="nrtel" value="<?php echo $nrtel?>" required><br><br>
            </div>

            <button type="submit" class="btn-db btn-add" name="editUser">Edytuj dane</button>


        </form>
    </div>
</div>
<!--<script>
TU MOGL BYC FAJNY JAVASCRIPT ALE GO NIE MA
    function submitForm() {
        var form = document.getElementById("Form");
        var formData = new FormData(form);
        var values = {};

        for (var pair of formData.entries()) {
            values[pair[0]] = pair[1];
        }

        console.log(values);

        form.reset();
    }
</script> -->
</body>
</html>

