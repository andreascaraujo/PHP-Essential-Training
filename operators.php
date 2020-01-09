<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operators and Logical Operators</title>
</head>
<body>

<?php 
$a = 4;
$b = 3;
$c = 1;
$d = 20;
if(($a > $b) && ($c > $d)){
    echo "a is larger than b AND ";
    echo "c is larger than d";
}
?><br /><br />
<?php
if(($a > $b) || ($c > $d)){
    echo "a is larger than b OR ";
    echo "c is larger than d";
}
?><br /><br />

<?php 
if(!isset($e)){
    $e = 200;
}
echo $e;
?>

</body>
</html>