<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My YouTube Channel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('fetch_videos.php'); ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">My YouTube Channel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Videos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Subscribe</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Videos -->
    <div class="container mt-5">
        <h2>Latest Videos</h2>
        <div class="row">
            <?php if (!empty($videos['items'])): ?>
                <?php foreach ($videos['items'] as $video): ?>
                    <div class="col-md-4">
                        <div class="video-card">
                            <iframe src="https://www.youtube.com/embed/<?php echo $video['id']['videoId']; ?>" allowfullscreen></iframe>
                            <h5><?php echo $video['snippet']['title']; ?></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No videos found.</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
