<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If</title>
</head>
<body>

<?php 
$a = 4;
$b = 39;

if($a >$b){
    echo "a is larger than b";
} elseif($a < $b) {
    echo "a is smaller than b";
} else {
    echo "a is equal to b";
}
?> <br />

<?php //Only welcome new users
$new_user = true;
if($new_user){
    echo "<h1>Welcome!</h1>";
    echo "<p>We are glad you decided to join us.</p>";
}
?><br />

</body>
</html>