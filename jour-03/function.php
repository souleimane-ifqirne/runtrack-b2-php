<?php
require_once './class/Grade.php';
require_once './class/Student.php';
require_once './class/Floor.php';
require_once './class/Room.php';

$host = "localhost";
$username = "root";
$password = "root";
$dbname = "lp_official";
function findOneStudent(int $id): Student {
    global $host, $username, $password, $dbname;
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt = $db->prepare('SELECT * FROM student WHERE id = ?');
    $stmt->execute([$id]);
    $student = $stmt->fetch();
    return new Student($student['id'], false, $student['email'], $student['fullname'], false, false);
}
function findOneRoom(int $id): Room {
    global $host, $username, $password, $dbname;
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt = $db->prepare('SELECT * FROM room WHERE id = ?');
    $stmt->execute([$id]);
    $student = $stmt->fetch();
    return new Room;
}
function findOneGrade(int $id): Student {
    global $host, $username, $password, $dbname;
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt = $db->prepare('SELECT * FROM grade WHERE id = ?');
    $stmt->execute([$id]);
    $student = $stmt->fetch();
    return $student;
}
function findOneFloor(int $id): Student {
    global $host, $username, $password, $dbname;
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt = $db->prepare('SELECT * FROM floor WHERE id = ?');
    $stmt->execute([$id]);
    $student = $stmt->fetch();
    return new Student;
}