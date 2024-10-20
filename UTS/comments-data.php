<?php
// comments-data.php

// Initialize the comments array if it doesn't exist
if (!file_exists('comments.json')) {
    $comments = array();
    file_put_contents('comments.json', json_encode($comments));
} else {
    // Load existing comments
    $comments = json_decode(file_get_contents('comments.json'), true);
}

// Function to add a new comment
function addComment($name, $comment) {
    global $comments;
    $newComment = array(
        'name' => $name,
        'comment' => $comment,
        'timestamp' => time()
    );
    
    // Check if this exact comment already exists
    if (!commentExists($newComment)) {
        array_unshift($comments, $newComment);
        file_put_contents('comments.json', json_encode($comments));
        return true;
    }
    return false;
}

// Function to check if a comment already exists
function commentExists($newComment) {
    global $comments;
    foreach ($comments as $comment) {
        if ($comment['name'] === $newComment['name'] && 
            $comment['comment'] === $newComment['comment'] && 
            abs($comment['timestamp'] - $newComment['timestamp']) < 5) {
            return true;
        }
    }
    return false;
}

// Function to get all comments
function getComments() {
    global $comments;
    return $comments;
}
?>