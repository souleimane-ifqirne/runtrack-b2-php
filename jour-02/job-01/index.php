<?php

function find_all_students() : array {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lp_official";
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt = $conn->prepare("SELECT * FROM student");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student table</title>
    <meta http-equiv="refresh" content="2">
</head>
<body>
<table>
  <thead>
    <tr>
        <th>Grade</th>
        <th>Email</th>
        <th>Fullname</th>
        <th>Birthdate</th>
        <th>gender</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $arr = find_all_students();
    foreach ($arr as $row) {
        echo"<tr>";
        echo "<td>{$row['grade_id']}</td>";
        echo "<td>{$row['email']}</td>";  
        echo "<td>{$row['fullname']}</td>";
        echo "<td>{$row['birthdate']}</td>";
        echo "<td>{$row['gender']}</td>";
        echo"</tr>";
        }
    ?>
  </tbody>
</table>
</body>
<style>
 table {
    overflow: hidden;
    border-spacing: 0;
    border-radius: 12px 12px 0 0;
    box-shadow: 1px 1px 4px rgb(255, 255, 255);
}

th, td {
    padding: 10px 15px;
    font-size: 22px;
    font-family: 'Lucida Sans';
    text-shadow: 1px 1px 4px #424242;
}

th {
    text-transform: uppercase;
}

</style>
</html>
