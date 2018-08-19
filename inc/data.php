<?php
include 'select-data.php';
$obj = new milestones();
$result = $obj->select();
print_r($result);
?>