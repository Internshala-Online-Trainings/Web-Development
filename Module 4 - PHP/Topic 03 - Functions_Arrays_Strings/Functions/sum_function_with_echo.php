<?php

function sum($parameter1, $parameter2 = 0) {
  $addition = $parameter1 + $parameter2;
  echo "Sum of two variables is " . $addition . ".";
  return;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Functions</title>
    </head>
    <body>
<?php
$var1 = 18;
$var2 = 12;
sum($var1, $var2);
?>
    </body>
</html>