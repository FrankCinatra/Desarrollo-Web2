<?php
    $expires = new DateTime('+1 day');
    setcookie('username', 'tommy', $expires->getTimestamp(), '/');

    echo $_COOKIE['username'];
?>