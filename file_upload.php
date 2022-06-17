<?php

$username = $_POST['username'];

echo 'Username: ' . $username;

$profile_image = $_FILES['profile_image'];

echo "<pre>";
print_r($profile_image);
echo "</pre";
?>