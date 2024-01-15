<?php
include('db/dbconn.php');
session_start();
if (isset($_POST['submit_verification'])) {
    header('Location: home.php');
    exit; // Ensure that no code is executed after the header
}
?>
