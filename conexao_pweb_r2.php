<?php

$connect = mysqli_connect("127.0.0.1", "root", "");

if (!$connect) die ("<h1>Tente novamente.</h1>");

$db = mysqli_select_db($connect, "pweb");

?>