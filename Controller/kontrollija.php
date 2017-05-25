<?php

function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust andmebaasiga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("UTF-8 ei ole määratud - ".mysqli_error($connection));
}

function register(){
    global $connection;
    
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        if (empty($_POST['user'])){
            $errors[] = "Palun sisesta kasutajanimi";
        } else {
            $user = mysqli_real_escape_string($connection, $_POST['user']);
            $sql = "SELECT * FROM mpalmeos_kasutajad WHERE user = '$user'";
            $result = mysqli_query($connection, $sql) or die ($sql . " - " . mysqli_error($connection));
            if (mysqli_num_rows($result)>0){
                $errors[] = "Valitud kasutajanimi on juba kasutusel";
            }
        }
        if (empty($_POST['pass'])){
            $errors[] = "Palun sisesta parool";
        } else {
            $pass = SHA1(mysqli_real_escape_string($connection, $_POST['pass']));
        }
        if (empty($_POST['email'])){
            $errors[] = "Palun sisesta e-mail";
        } else {
            $email = mysqli_real_escape_string($connection, $_POST['email']);
        }   
        if (!empty($_POST['loom'])){
            $loom = mysqli_real_escape_string($connection, $_POST['loom']);
        } else {
            $loom = "";
        }
        if (!isset($errors)){
            $sql = "INSERT INTO mpalmeos_kasutajad (user, pass, email, loom) VALUES ('$user', '$pass', '$email', '$loom')";
            mysqli_query($connection, $sql) or die ($sql . " - " . mysqli_error($connection));
        }
    }
    include_once('View/registreeri.html');
}

function login(){
    global $connection;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if (empty($_POST['user'])){
            $errors[] = "Palun sisesta kasutajanimi";
        } else if (empty($_POST['pass'])){
            $errors[] = "Palun sisesta parool";
        } else {
            $user = mysqli_real_escape_string($connection, $_POST['user']);
            $pass = mysqli_real_escape_string($connection, $_POST['pass']);
            $sql = "SELECT * FROM mpalmeos_kasutajad WHERE user = '$user' AND pass = SHA1('$pass')";
            $result = mysqli_query($connection, $sql) or die($sql ." - ".mysqli_error($connection));
            if (mysqli_num_rows($result)>0){
                $data = mysqli_fetch_assoc($result);
                $_SESSION['user'] = $data['id'];
                header("Location: ?");
            } else {
                $errors[] = "Vale kasutajanimi või parool";
            }
        }
    }
    include_once('View/login.html');
}
function logout(){
    session_destroy();
    header("Location: ?");
}
function lisa(){
    global $connection;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if (empty($_POST['sonum'])){
            $error = "Palun sisesta oma sõnum";
        } else {
            $title = mysqli_real_escape_string($connection, $_POST['title']);
            $sonum = mysqli_real_escape_string($connection, $_POST['sonum']);
            $user = mysqli_real_escape_string($connection, $_SESSION['user']);
            $sql = "INSERT INTO mpalmeos_messages (title, sonum, user) VALUES ('$title', '$sonum', '$user')";
            mysqli_query($connection, $sql) or die ($sql . " - " . mysqli_error($connection));
            header("Location: ?page=message");
        }
    }
    
    include_once('Views/teateLisamine.html');
}
function naita(){
    global $connection;
    $sql = "SELECT mpalmeos_messages.title,
        mpalmeos_messages.sonum, 
        mpalmeos_messages.time,
        mpalmeos_kasutajad.user,
        mpalmeos_kasutajad.loom
        FROM mpalmeos_messages, mpalmeos_kasutajad
        WHERE mpalmeos_messages.user = mpalmeos_kasutajad.id
        ORDER BY mpalmeos_messages.time DESC";
    $sonumid = mysqli_query($connection, $sql) or die ($sql . " - " . mysqli_error($connection));
    
            
    include_once('View/teated.html');
}
?>