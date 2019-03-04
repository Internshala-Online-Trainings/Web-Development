<!DOCTYPE html>
<html>
    <head>
        <title>Arrays</title>
    </head>
    <body>
        <?php
        $numbers = array(array(18, 12), array(1, 2));
        $sum = $numbers[0][0] + $numbers[0][1];
        echo "Sum of two variables is " . $sum . ".";
        ?>
    </body>
</html>