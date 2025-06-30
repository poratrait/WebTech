<?php
$uploadDir = "uploads/";

// Create directory if it doesn't exist
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// --- Resume Upload ---
if (isset($_FILES['resume'])) {
    $resume = $_FILES['resume'];
    $resumeName = basename($resume["name"]);
    $resumePath = $uploadDir . $resumeName;

    $allowedResumeTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

    if (in_array($resume["type"], $allowedResumeTypes) && $resume["size"] <= 500 * 1024) {
        if (!file_exists($resumePath)) {
            if (is_uploaded_file($resume["tmp_name"])) {
                move_uploaded_file($resume["tmp_name"], $resumePath);
                echo "Resume uploaded successfully.<br>";
            }
        } else {
            echo "Resume file already exists.<br>";
        }
    } else {
        echo "Invalid resume file.<br>";
    }
}

// --- Photo Upload ---
if (isset($_FILES['photo'])) {
    $photo = $_FILES['photo'];
    $photoName = basename($photo["name"]);
    $photoPath = $uploadDir . $photoName;

    $allowedPhotoTypes = ['image/jpeg', 'image/jpg'];

    if (in_array($photo["type"], $allowedPhotoTypes) && $photo["size"] <= 1024 * 1024) {
        if (!file_exists($photoPath)) {
            if (is_uploaded_file($photo["tmp_name"])) {
                move_uploaded_file($photo["tmp_name"], $photoPath);
                echo "Photograph uploaded successfully.<br>";
            }
        } else {
            echo "Photo file already exists.<br>";
        }
    } else {
        echo "Invalid photo file.<br>";
    }
}
?>