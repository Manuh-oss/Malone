<?php
include("connection.php");

$sql = "SELECT mathematics,english,kiswahili,chemistry,biology,physics,geography,businessstudies, RANK() OVER  (ORDER BY english DESC) AS position FROM resuls";