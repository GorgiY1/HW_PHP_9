<?php
include 'connect.php';

$sql = "SELECT * FROM messages ORDER BY created_at";
$stmt = $conn->query($sql);

$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($messages);
?>