<?php
include_once("./teacher.php");
include_once("./student.php");

$teacher = new teacher\JoiningDetail();
$student = new student\JoiningDetail();

$teacher->joining();
echo "<br/>";
$student->admission();
