<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

<?php 

$numbers = array(4,8,15,16,23,42);
echo $numbers[1];

?><br />

<?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?><br />

<?php echo $mixed[2]; ?><br />
<?php echo $mixed[3]; ?><br />
<?php echo $mixed ?><br />

<?php echo $mixed[3][1]; ?><br />

<?php $mixed[2] = "cat"; ?><br />
<?php $mixed[4] = "mouse"; ?><br />
<?php $mixed[] = "horse" ?><br />

<pre>
<?php echo print_r($mixed); ?>
</pre>

<br />

<?php $array = [1,2,3]; 
echo $array[1]; ?>

</body>
</html>