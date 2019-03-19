<?php 
session_start(); 
$_SESSION['pagename'] = "hits_index";
include 'db/db.php'; include 'db/error.php'; 
include 'db/pushhits.php';
?>

