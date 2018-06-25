<?php
$connection = mysql_connect("localhost", "root", "") or die ("Could not connect" . mysql_error());
$selection = mysql_select_db("quizMalaysia") or die ("Could not connect to database." . mysql_error());