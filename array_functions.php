<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Functions</title>
</head>
<body>

<?php $numbers = array(8,23,15,42,16,4); ?><br />

Count: <?php echo count($numbers); ?><br /> 
Max value: <?php echo max($numbers); ?><br />
Min value:  <?php echo min($numbers); ?><br />

<pre>
Sort:  <?php echo sort($numbers); print_r($numbers); ?><br />
Reverse sort:  <?php echo rsort($numbers); print_r($numbers); ?><br />
</pre>
<br />

Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br />
Explode: <?php print_r(explode(" * ", $num_string)); ?><br />
<br />

15 in array?: <?php echo in_array(15, $numbers); //returns T/F ?><br />
19 in array?: <?php echo in_array(19, $numbers); //returns T/F ?><br />

</body>
</html>