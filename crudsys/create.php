<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $targetDir = "uploads/";
        $fileName = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $fileName;

        // Create uploads directory if it doesn't exist
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        // Move the uploaded file to the server
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            // Insert product details into the database
            $sql = "INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $description, $price, $fileName]);

            echo "Product added successfully!";
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "No image uploaded or an error occurred.";
    }
}
?>

<form action="create.php" method="POST" enctype="multipart/form-data">
    <label for="name">Product Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" required>

    <label for="image">Upload Image:</label>
    <input type="file" name="image" id="image" accept="image/*" required>

    <button type="submit" name="submit">Add Product</button>
</form>

