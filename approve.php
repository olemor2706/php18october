<?php
include "common.php";

$id = $__POST ("id");
$departmentId = $__POST ("department_id");
$managerId = $__POST ("manager_id");
$salary = $__POST ("salary");

$seeker = new JobSeeker;
$seeker->hire($id); 
?>