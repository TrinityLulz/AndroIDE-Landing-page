<?php

function logDownload() {
    // Get the date and time
    $date = date('Y-m-d H:i:s');

    // Get the IP address
    $ip = $_SERVER['REMOTE_ADDR'];

    // Get the User Agent
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Create log message
    $logMessage = "Date and Time: $date\nIP Address: $ip\nUser Agent: $userAgent\n\n";

    // File to write to
    $fileName = 'download.txt';

    // Append to the file
    file_put_contents($fileName, $logMessage, FILE_APPEND);

    // After logging, you can redirect to the actual file download
    header('Location: https://download1323.mediafire.com/i7riij900rdgRTBbwCxdQAj5aZX3nzV8NE8tWsnpEHCV60UKLHoqNLOTpeh84Twuyj-usAB_jAI4MX0WTtwgZFfyr-y-cqMdv3pV6rVt0hRl3ErugkXJLGPb0RkSpN2_2DFwT_OWHrkUBe1Z5-eKyBVbBDqrn_n33iAA0QlqN_CyzQ/ksvb6sj8ou0jbfc/app-release.apk'); // This should be the path to your downloadable APK
    exit;
}

// Call the function to log each download attempt
logDownload();

?>
