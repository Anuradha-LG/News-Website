<?php
include('db.php');

// Handle delete news
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare('SELECT image FROM news WHERE id = :id');
    $stmt->execute(['id' => $id]);
    $news = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($news['image']) {
        unlink('uploads/' . $news['image']); // Delete the image file from server
    }
    $stmt = $pdo->prepare('DELETE FROM news WHERE id = :id');
    $stmt->execute(['id' => $id]);
    header('Location: admin.php');
}

// Handle add news
if (isset($_POST['add_news'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Handle file upload
    $image = null;
    if ($_FILES['image']['name']) {
        $image = time() . '-' . basename($_FILES['image']['name']);
        $targetDir = 'uploads/';
        $targetFile = $targetDir . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
    }

    $stmt = $pdo->prepare('INSERT INTO news (title, content, image) VALUES (:title, :content, :image)');
    $stmt->execute(['title' => $title, 'content' => $content, 'image' => $image]);
    header('Location: admin.php');
}

// Fetch all news
$stmt = $pdo->prepare('SELECT * FROM news ORDER BY created_at DESC');
$stmt->execute();
$newsItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
    <link rel="stylesheet" href="assets/css/admin.css" />
</head>
<body>
    <h1>Latest News</h1>

    <!-- Admin Add News Form -->
    <h2><a href="index.php" class="button">Home</a></h2>
    <form method="POST" action="admin.php" enctype="multipart/form-data">
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" required><br><br>
        <label for="content">Content:</label><br>
        <textarea name="content" id="content" required></textarea><br><br>
        <label for="image">Image:</label><br>
        <input type="file" name="image" id="image"><br><br>
        <button type="submit" name="add_news">Add News</button>
    </form>

    <hr>

    <!-- Display All News -->
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($newsItems as $news): ?>
        <tr>
            <td><?php echo htmlspecialchars($news['title']); ?></td>
            <td><?php echo htmlspecialchars(substr($news['content'], 0, 100)) . '...'; ?></td>
            <td>
                <?php if ($news['image']): ?>
                    <img src="uploads/<?php echo htmlspecialchars($news['image']); ?>" alt="News Image" width="100">
                <?php else: ?>
                    No image
                <?php endif; ?>
            </td>
            <td>
                <a href="admin.php?delete=<?php echo $news['id']; ?>" onclick="return confirm('Are you sure you want to delete this news item?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
