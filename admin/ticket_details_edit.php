<?php
include 'db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM ticket_details WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $seat_id = $_POST['seat_id'];
    $ticket_id = $_POST['ticket_id'];
    $price = $_POST['price'];
 

    $sql = "UPDATE ticket_details SET user_id=?, seat_id=?, ticket_id=?, price=?, updated_at=NOW() WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiidddiiiii", $user_id, $seat_id, $ticket_id, $price,  $id);
    $stmt->execute();
    header("Location: ticket_details.php");
}
?>