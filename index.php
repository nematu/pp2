<?php
/* Nematullah
* 01/15/2021
 *
 */
ini_set('display_errors',1);
error_reporting(E_ALL);

// Includes
include ("include/functions.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
<?php
echo "<p>Step: 1 - PHP Array Practice</p>";
$numbers = array(7,9,8,9,8,8,6);

printArr($numbers);
echo "<p>".largest($numbers)."</p>";
distribute($numbers);

?>

</body>
</html>
