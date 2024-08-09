<?php
$input_password = 'your_plain_password_here'; // Replace with the plain password you are testing
$hashed_password_from_db = 'hashed_password_from_db_here'; // Replace with the hashed password from the database

if (password_verify($input_password, $hashed_password_from_db)) {
    echo "Password matches.";
} else {
    echo "Password does not match.";
}
?>
