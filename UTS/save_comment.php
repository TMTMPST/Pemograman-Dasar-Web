<?php
if (isset($_POST['username']) && isset($_POST['comment'])) {
    $username = htmlspecialchars($_POST['username']);
    $comment = htmlspecialchars($_POST['comment']);

    $commentData =  $username . "\n " . $comment . "\n\n";

    // Append the comment to the comments.txt file
    if (file_put_contents('comments.txt', $commentData, FILE_APPEND)) {
        echo "Comment saved successfully!";
    } else {
        echo "Error saving comment.";
    }
} else {
    echo "No data received.";
}
?>