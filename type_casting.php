<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type Juggling and Type Casting</title>
</head>
<body>

Type Juggling <br />
<?php $count = "2"; ?>
Type: <?php echo gettype($count); ?><br />

<?php $count += 3 ?>
Type: <?php echo gettype($count); ?><br />

<br />

Type Casting<br />
<?php settype($count, "integer"); ?><br />
count: <?php echo gettype($count); ?><br />
<br />

<?php $count2 = (string) $count; ?>
count: <?php echo gettype($count); ?><br />
count2: <?php echo gettype($count2); ?><br />
<br />

<?php $test1 = 3; ?>
<?php $test2 = 3; ?>
<?php settype($test1, "string"); ?>
<?php (string) $test2; ?>

test1: <?php echo gettype($test1); ?><br />
test2: <?php echo gettype($test2); ?><br />

</body>
</html>