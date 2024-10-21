<?php
$comments = '';
if (file_exists('comments.txt')) {
    $comments = file_get_contents('comments.txt');
    $commentsArray = explode("\n\n", trim($comments));

    foreach ($commentsArray as $comment) {
        // Skip empty lines (in case there are any)
        if (trim($comment) != "") {
            $commentLines = explode("\n", $comment); // Split each comment by lines
            $nameLine = $commentLines[0]; // First line is the name
            $commentLine = $commentLines[1]; // Second line is the comment

            // Display each comment in a styled Bootstrap card
            echo '<div class="list-group-item list-group-item-action mb-2 border rounded shadow-sm">';
            echo '<div class="d-flex justify-content-between align-items-center">';
            echo '<h5 class="mb-1 text-primary">' . htmlentities($nameLine) . '</h5>'; // Name
            echo '</div>';
            echo '<p class="mb-1">' . htmlentities($commentLine) . '</p>'; // Comment
            echo '</div>';
        }
    }
} else {
    echo '<div class="alert alert-warning">No comments available.</div>';
}

?>