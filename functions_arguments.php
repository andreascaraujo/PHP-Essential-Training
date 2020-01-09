<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions: Arguments</title>
</head>
<body>

<?php 

function say_hello_to($word) {
    echo "Hello {$word}!<br />";
}

say_hello_to("Everyone");

$name = "John Doe";
say_hello_to($name);

?><br /><br />

<?php 

function better_hello($greeting, $target, $punct) {
    echo $greeting . " " . $target . $punct . "<br />";
}

better_hello("Hi", $name, "!!!");

better_hello("Hi", $name, null); // Hi John Doe
better_hello("Hi", $name, ""); // Hi John Doe

?>

</body>
</html>