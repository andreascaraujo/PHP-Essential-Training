<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
</head>
<body>

<?php $assoc = array("first_name" => "Kevin", "last_name" => "Skoglund"); ?><br />

<?php echo $assoc["first_name"]; ?><br />
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

<?php $assoc["first_name"] = "Larry"; ?>
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

</body>
</html>