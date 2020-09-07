<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = @new mysqli('localhost', 'root', '', 'giftbox');

if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
session_start();
define('BASEURL', $_SERVER['DOCUMENT_ROOT'] . '/tutro');
require_once BASEURL . '/helpers/helpers.php';


if(isset($_SESSION['SBUser'])){
    $user_id = $_SESSION['SBUser'];
    $query = $mysqli->query("SELECT * FROM users WHERE id = '$user_id'");
    $user_data = mysqli_fetch_assoc($query);
    $fn = explode(' ', $user_data['full_name']);
    $user_data['first'] = $fn[0];
    $user_data['last'] = $fn[1];
}


if(isset($_SESSION['success_flash'])){
    echo '<div class="bg-success"><p class="text-white text-center">'.$_SESSION['success_flash'].'</p></div>';
    unset($_SESSION['success_flash']);
}

if(isset($_SESSION['error_flash'])){
    echo '<div class="bg-danger"><p class="text-white text-center">'.$_SESSION['error_flash'].'</p></div>';
    unset($_SESSION['error_flash']);
}




