<?php
const BASE_URL = "http://localhost/php2/assignment/";
const DBNAME = "asm_php2";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

function deleteSession () {
    unset($_SESSION['err']);
}

function route ($name_route) {
    return BASE_URL.$name_route;
}

function redirect ($key, $msg, $route) {
    
    $_SESSION[$key] = $msg;
    switch ($key) {
        case "success":
            // setcookie($key, $msg, time() + 1);
            // var_dump($_COOKIE);
            // exit;
            unset($_SESSION['err']);
            break;
        case "err":
            // $_SESSION[$key] = $msg;

            unset($_SESSION['success']);
            break;
    }
    header("location:" . BASE_URL . $route . "?msg=" . $key);
    exit;
}
?>