<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $original_url = $_POST["original_url"];

    // Perform URL validation here if needed

    // Generate a short code (you may use a more sophisticated method)
    $short_code = substr(md5($original_url), 0, 6);

    // Build the shortened URL
    $shortened_url = "https://outputurl.github.io/$short_code";

    // Display the shortened URL
    echo "Shortened URL: <a href='$shortened_url' target='_blank'>$shortened_url</a>";
}
?>
