<!-- admin_panel.php przynjamiej kiedys to bedzie admin panel XD-->

<?php

include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Panel administracyjny</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>



<div class="container">
<form action="AddNewRecord.php" method="POST">

    <div class="tabela">
        <label for="">ID</label><br>
        <input type="text" name="id" class="pole" placeholder="ID">
    </div>

    <div class="tabela">
        <label for="">Imie</label><br>
        <input type="text" name="imie" class="pole" placeholder="Imie">
    </div>

    <div class="tabela">
        <label for="">Nazwisko</label><br>
        <input type="text" name="nazwisko" class="pole" placeholder="Nazwisko">
    </div>

    <div class="tabela">
        <label for="">Numer telefonu</label><br>
        <input type="text" name="nrtel" class="pole" placeholder="Numer telefonu">
    </div>

        <button type="submit" name="update_bdanych" class="btn btn-logout">Aktualizuj dane</button>

</form>
<a href="logout.php" class="">Wyloguj</a>
</div>
</body>
</html>
