<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the product details
    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        echo "Product not found.";
        exit;
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Handle image upload if a new file is selected
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        $fileName = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            $image = $fileName;
        } else {
            echo "Failed to upload image.";
            exit;
        }
    } else {
        // Keep the old image if no new file is uploaded
        $image = $product['image'];
    }

    // Update the product in the database
    $sql = "UPDATE products SET name = ?, description = ?, price = ?, image = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $description, $price, $image, $id]);

    header("Location: read.php");
    exit;
}
?>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="name">Product Name:</label>
    <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required><?php echo htmlspecialchars($product['description']); ?></textarea>

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" value="<?php echo htmlspecialchars($product['price']); ?>" required>

    <label for="image">Upload New Image:</label>
    <input type="file" name="image" id="image" accept="image/*">

    <button type="submit" name="submit">Update Product</button>
</form>
