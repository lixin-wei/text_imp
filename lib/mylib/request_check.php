<?php
@session_start();
if (!isset($_SESSION['request_id'])) {
    header('Location: index.php');
    die();
}