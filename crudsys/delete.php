<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the product
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    header("Location: read.php");
    exit;
} else {
    echo "Invalid product ID.";
}
?>
