<?php
include('db.php');


if (isset($_POST)) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $user = $_POST['user'];
    $password = $_POST['password'];
    $query = "SELECT * FROM  login  WHERE user = '$user' and password ='$password' ";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {

        //muestra array asociativo del login
        $usuario = mysqli_fetch_assoc($result);

        $_SESSION['usuario'] = $usuario;
        header('Location: task.php');
    } else {

        $_SESSION['error_login'] = "Login incorrecto";
    }
} else {
    header('Location: index.php');
}
