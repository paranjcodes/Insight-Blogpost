<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Posts - Creative Blog</title>
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

    <h2>All Posts</h2>
    <section class="content-section">
        <div id="posts-section">
            <?php include 'fetch_posts.php'; ?>
        </div>        
    </section>

    <footer class="main-footer">
        <p>&copy; 2024 Insight. All rights reserved.</p>
    </footer>
</body>

</html>
