<?php
/* Nematullah
* 01/15/2021
 * URL: https://nayaz.greenriverdev.com/328/pp2/
 * Pair Program 2
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
echo "<p>Step1:- PHP Array Practice</p>";
$numbers = array(7,9,8,9,8,8,6);
echo '<p>Step 2: Print array "one element per line" </p>';
printArr($numbers);

echo "<p>Step 3: functions.php file created </p>";
echo "<p>Step 4: printing largest value </p>";
echo "<p>".largest($numbers)."</p>";
echo "<p>Step 5: duplicate removed </p>";
$uniqueNum = removeDups($numbers);
foreach ($uniqueNum as $x){
    echo $x."<br>";
}

echo "<p>Step 6: printing Associative Array </p>";
distribute($numbers);

?>

</body>
</html>
