<?php
$uploadDir = 'uploads/';
$images = array();

if (is_dir($uploadDir)) {
    if ($dh = opendir($uploadDir)) {
        while (($file = readdir($dh)) !== false) {
            // Skip the current and parent directory
            if ($file != '.' && $file != '..') {
                $images[] = $uploadDir . $file;
            }
        }
        closedir($dh);
    }
}

echo json_encode($images);
?>