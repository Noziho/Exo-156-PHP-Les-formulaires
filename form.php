<?php
$user_name = strtolower($_POST['user_name']);
if ($user_name === "james") {
    echo "Bond, James Bond";
}
else {
    echo "Bonjour".$user_name;
}
