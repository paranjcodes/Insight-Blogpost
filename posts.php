<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts - Creative Blog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="background">
        <div class="bg-animation"></div>
    </div>

    <header class="main-header">
    <h1>Insight</h1>
        <nav class="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="abouts.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="posts.php">Upload</a></li>
                <li><a href="viewposts.php">Posts</a></li>
            </ul>
        </nav>
    </header>

    <section class="content-section">
        <h2>Latest Posts</h2>

        <!-- Blog Post Upload Form -->
        <div>
            <form action="upload.php" method="post">
                <input type="text" name="title" placeholder="Post Title" required>
                <textarea name="content" placeholder="Post Content" required></textarea>
                <button type="submit">Upload Post</button>
            </form>
        </div>

        <!-- Section to display all posts -->
    </section>

    <footer class="main-footer">
        <p>&copy; 2024 Insight. All rights reserved.</p>
    </footer>
</body>

</html>
