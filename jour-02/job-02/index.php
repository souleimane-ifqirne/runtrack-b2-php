<?php

if ($_SERVER['REQUEST_METHOD'] ==='POST') {
    $email = $_POST['email'];
}

function find_one_student(string $email) : array {
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "lp_official";
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $stmt = $conn->prepare("SELECT * FROM student WHERE email = '$email'");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->execute();
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student table</title>
</head>
<body>
<form method="POST" action="">
  <label for="name">E-mail : </label><br>
  <input type="text" id="email" name="input-email-student"><br>
  <button type="submit" onlick="">Chercher E-mail</button>
</form>
</body>
<style>
button {
    background-color: rgb(245, 245, 245, 0.3);
    border-radius: 12px;
    border-spacing: 2;
    box-shadow: 1px 1px 4px rgb(255, 255, 255);
    transition: 0.3s;
}

button:hover {
    background-color: rgb(100, 100, 100, 1);
    color: white;

}
form {
    overflow: hidden;
    border-spacing: 0;
    border-radius: 12px 12px 0 0;
    box-shadow: 1px 1px 4px rgb(255, 255, 255);
}

label {
    padding: 10px 15px;
    font-size: 22px;
    font-family: 'Lucida Sans';
    text-shadow: 1px 1px 4px #424242;
}
</style>
</html>
