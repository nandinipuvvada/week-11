<!DOCTYPE html>
<html>
<head>
    <title>Positive or Negative</title>
</head>
<body>
    <h2>Positive or Negative Number</h2>
    <?php
        $a = -10;

        if ($a > 0) {
            echo "Positive Number";
        } elseif ($a < 0) {
            echo "Negative Number";
        } else {
            echo "Zero";
        }
    ?>
</body>
</html>