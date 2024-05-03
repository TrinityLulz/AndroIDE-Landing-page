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
    header('Location: app-release.apk'); // This should be the path to your downloadable APK
    exit;
}

// Call the function to log each download attempt
logDownload();

?>
