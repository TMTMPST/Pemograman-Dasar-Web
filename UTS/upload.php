<?php
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $uploadDir = 'uploads/';
    $fileName = basename($_FILES['image']['name']);
    $targetFilePath = $uploadDir . $fileName;

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            echo $targetFilePath;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
} else {
    echo 0;
}
?>