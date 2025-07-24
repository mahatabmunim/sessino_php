<?php

session_start();

$_SESSION['username'] = 'mahatab';
echo $_SESSION ['username'];
// unset($_SESSION ['username']);

session_destroy();
$_SESSION['username'] = 'ahmahatab';
echo $_SESSION ['username'];
unset($_SESSION ['username']);

 




