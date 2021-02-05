<?php
setcookie("mono", "", time() - 3600);
setcookie("pass", "", time() - 3600);
echo "Changed";
?>