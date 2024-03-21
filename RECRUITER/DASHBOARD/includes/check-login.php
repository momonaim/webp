<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    $myid = $_SESSION['myid'];
    $mycompany = $_SESSION['compname'];
    $myemail = $_SESSION['myemail'];
    $mypass = $_SESSION['mypass'];
    $mylogo = $_SESSION['mylogo'];
    $myweb = $_SESSION['website'];
    $mydesc = $_SESSION['mydesc'];
    $mytitle = $_SESSION['mytitle'];
    $mydate = $_SESSION['mydate'];
    $mysize = $_SESSION['mysize'];
    $mystreet = $_SESSION['mystreet'];
    $mycity = $_SESSION['mycity'];
    $mycountry = $_SESSION['mycountry'];
    $myphone = $_SESSION['myphone'];
    $mycp = $_SESSION['mycp'];
    $mystatus = $_SESSION['mystatus'];
    $role = $_SESSION['role'];
    $user_online = true;
} else {
    $user_online = false;
}
?>