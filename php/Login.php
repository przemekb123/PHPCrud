<?php

if(isset($_SESSION['Zalogowany'])&& $_SESSION['Zalogowany'] === true){
    header("Location: Login.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];    //pobieranie danych z
    $password = $_POST['password'];

    if($username === 'Admin' && $password === 'default') { //sprawdzanie czy uzytkownik wpisal dobre dane, jesli tak session = true i przekierowny zostanie na index.html
        $_SESSION['Zalogowany'] = true;

        header('Location: bdanych.php');
        exit();
    }

    else{
        $error_message = "Nieprawidlowe dane";
    }


}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Logowanie</title>
</head>
<body>
<h2>Logowanie</h2>
<?php if (isset($error_message)) { ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
<?php } ?>
<form method="POST" action="">
    <label>Nazwa użytkownika:</label><br>
    <input type="text" name="username" required><br><br>  <!-- name musi byc takie same jak w $username = $_POST['...'], linijka 9 php! -->
    <label>Hasło:</label><br>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="Zaloguj">
</form>
</body>
</html>
