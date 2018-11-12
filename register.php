<?php
include "common.php";
$lastName = $_POST ["last_name"];
$firstName = $_POST ["first_name"];
$seeker = new JobSeeker;
$seeker->register($lastName, $firstName);
?>