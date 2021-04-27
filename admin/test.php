<?php


echo is_writable('./test.php') ? '<span style="color: green;">可写</span>' : '<span style="color: red;">不可写</span>';

echo "<br />";

echo is_writable('./test.php') ? '<span style="color: green;">可写</span>' : '<span style="color: red;">不可写</span>';

echo "<br />";

echo shell_exec("id -a");

echo "<br />";

echo shell_exec("groups apache");

?>
