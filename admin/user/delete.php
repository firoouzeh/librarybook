<?php

echo '<pre>' . print_r($_POST, true) . '</pre>';

$id = $_POST['id'];

require '../dbconnection.php';

$query = "DELETE FROM users WHERE id = $id;";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

header('Location:./index.php');

?>