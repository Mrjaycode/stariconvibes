<?php 
// Replace with your YouTube API Key
$api_key = "AIzaSyBYoL1XeexJcY3mMaMYENEJkLErZ359V2s";

// Replace with your YouTube Channel ID
$channel_id = "UCkyKio0rmbZv3szVZcMoT-w";

// Fetch latest videos automatically using YouTube API
$api_url = "https://www.googleapis.com/youtube/v3/search?key=$api_key&channelId=$channel_id&order=date&part=snippet&type=video&maxResults=9";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

// Handle errors
if(curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

// Decode response
$videos = json_decode($response, true);

// Fetching videos from another channel (optional)
$other_channel_id = "UCCeZr7gFpcVLgkXpR2Fq1Fw";
$other_api_url = "https://www.googleapis.com/youtube/v3/search?key=$api_key&channelId=$other_channel_id&order=date&part=snippet&type=video&maxResults=50";
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $other_api_url);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
$other_response = curl_exec($ch2);
curl_close($ch2);

$other_videos = json_decode($other_response, true);
?>
