<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Watch the latest videos from Your YouTube Channel. Subscribe to get more content on entertainment, gaming, and trending topics.">
    <meta name="keywords" content="YouTube, entertainment, gaming, trending videos, subscribe, latest videos, YouTube channel">
    <meta name="author" content="Your Name">
    <meta property="og:title" content="Your YouTube Channel - Watch Latest Videos">
    <meta property="og:description" content="Subscribe to watch the latest videos and trending content from Your YouTube Channel.">
    <meta property="og:image" content="URL_OF_IMAGE">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@yourTwitterHandle">
    <meta name="twitter:title" content="Your YouTube Channel - Watch Latest Videos">
    <meta name="twitter:description" content="Stay updated with the latest content on Your YouTube Channel.">
    <meta name="twitter:image" content="URL_OF_IMAGE">
    <title>Your YouTube Channel - Watch Latest Videos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Styles here */
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">My YouTube Channel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Videos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Shorts</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Trending</a></li>
                <li class="nav-item"><a class="nav-link" href="https://www.youtube.com/channel/UCkyKio0rmbZv3szVZcMoT-w" target="_blank">Subscribe</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container" style="margin-top: 80px;">
    <h2 class="text-center my-5">Latest Videos from My Channel</h2>
    <div class="row" id="latest-videos"></div>

    <h3 class="suggestions-title">Suggested Videos from Another Channel</h3>
    <div class="row" id="suggested-videos"></div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2025 Your YouTube Channel. All rights reserved.</p>
</div>

<script>
    const apiKey = "AIzaSyC__Nj8YjV2bw5aIVtpba3WMVZgeGXFbcs";
    const channelId = "UCkyKio0rmbZv3szVZcMoT-w";
    const otherChannelId = "UCCeZr7gFpcVLgkXpR2Fq1Fw";

    // Fetch latest videos from the main channel
    async function fetchVideos(apiKey, channelId, elementId, maxResults = 9) {
        const apiUrl = `https://www.googleapis.com/youtube/v3/search?key=${apiKey}&channelId=${channelId}&order=date&part=snippet&type=video&maxResults=${maxResults}`;

        try {
            const response = await fetch(apiUrl);
            const data = await response.json();

            if (data.items && data.items.length > 0) {
                const videoContainer = document.getElementById(elementId);

                data.items.forEach(video => {
                    const videoId = video.id.videoId;
                    const title = video.snippet.title;
                    const description = video.snippet.description;

                    const videoCard = document.createElement('div');
                    videoCard.className = 'col-md-4 col-sm-6';

                    videoCard.innerHTML = `
                        <div class="video-card">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/${videoId}?rel=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h5>${title}</h5>
                            <p>${description.slice(0, 100)}...</p>
                            <div class="social-share">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=${videoId}" target="_blank" class="social-btn fb-btn">Facebook</a>
                                <a href="https://twitter.com/intent/tweet?url=https://www.youtube.com/watch?v=${videoId}&text=Check%20this%20out!" target="_blank" class="social-btn twitter-btn">Twitter</a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.youtube.com/watch?v=${videoId}&title=Check%20out%20this%20video" target="_blank" class="social-btn linkedin-btn">LinkedIn</a>
                                <a href="https://www.instagram.com" target="_blank" class="social-btn insta-btn">Instagram</a>
                            </div>
                        </div>
                    `;

                    videoContainer.appendChild(videoCard);
                });
            } else {
                document.getElementById(elementId).innerHTML = '<p>No videos found.</p>';
            }
        } catch (error) {
            console.error('Error fetching videos:', error);
            document.getElementById(elementId).innerHTML = '<p>Error loading videos. Please try again later.</p>';
        }
    }

    // Fetch videos
    fetchVideos(apiKey, channelId, 'latest-videos');
    fetchVideos(apiKey, otherChannelId, 'suggested-videos', 50);
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
