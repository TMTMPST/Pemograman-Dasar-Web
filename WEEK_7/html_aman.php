<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Input email valid, lanjutkan dengan pengolahan email yang aman
} else {
    // Input email tidak valid, tangani error
    exit("Input email tidak valid");
}
?>