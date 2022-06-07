<?php 

function escapeString($string) {
    global $connect;
    $filter = mysqli_escape_string($connect, $string);
    $filter = htmlspecialchars($filter);
    return $filter;
}