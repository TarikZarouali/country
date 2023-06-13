<?php

require('functions.php');





$teacher = new Teacher("ronald", "lahwak", "zebi", 12313, 780);
echo $teacher->exposeMySalary();

echo"<hr>";

$teacher1 = new Teacher("ronald", "lahwak", "boer", 12313, 780);
echo $teacher1->exposeMySalary();