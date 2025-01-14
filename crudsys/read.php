<?php
include 'db.php';

$sql = "SELECT * FROM products";
$stmt = $pdo->query($sql);

echo "<table>";
echo "<tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['description']) . "</td>";
    echo "<td>" . htmlspecialchars($row['price']) . "</td>";
    echo "<td><img src='uploads/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' width='100'></td>";
    echo "<td>
            <a href='edit.php?id=" . $row['id'] . "'>Edit</a> | 
            <a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this product?\");'>Delete</a>
          </td>";
    echo "</tr>";
}

echo "</table>";
?>
