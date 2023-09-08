<?php

require_once 'Student.php';
require_once 'Grade.php';
require_once 'Room.php';
require_once 'Floor.php';
require_once 'functions.php';




$studentId = 25;
$student = findOneStudent($studentId);

$gradeid = 4;
$grade = findOneGrade($gradeid);

$floorid = 2;
$floor = findOneFloor($floorid);

$roomid = 8;
$room = findOneRoom($roomid);

?>