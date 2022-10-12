<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM metiers");

$stmt->execute();

$featured_metier = $stmt->get_result();

?>