<?php

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION = array();

session_destroy();
session_reset();

header("Location: index.php");
