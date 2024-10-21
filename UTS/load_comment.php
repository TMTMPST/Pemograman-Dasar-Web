<?php
$comments = '';
if (file_exists('comments.txt')) {
    $comments = file_get_contents('comments.txt');
    $commentsArray = explode("\n\n", trim($comments));

    foreach ($commentsArray as $comment) {
        if (trim($comment) != "") {
            $commentLines = explode("\n", $comment); // memisahkan baris per baris
            $nameLine = $commentLines[0]; // line pertama nama
            $commentLine = $commentLines[1]; // line kedua commentarr

            // Display
            echo '<div class="list-group-item list-group-item-action mb-2 border rounded shadow-sm">';
            echo '<div class="d-flex justify-content-between align-items-center">';
            echo '<h5 class="mb-1 text-primary">' . htmlentities($nameLine) . '</h5>';
            echo '</div>';
            echo '<p class="mb-1">' . htmlentities($commentLine) . '</p>';
            echo '</div>';
        }
    }
} else {
    echo '<div class="alert alert-warning">No comments available.</div>';
}

?>