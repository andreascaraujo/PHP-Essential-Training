<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Debugging</title>
</head>
<body>

<?php 
$number = 99;
$string = "Bug?";
$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

var_dump($number); // int(99)
var_dump($string); // string(4) "Bug?"
var_dump($array); // array(3) { [1]=> string(8) "Homepage" [2]=> string(8) "About Us" [3]=> string(8) "Services" }
?><br />

<pre>
<?php
print_r(get_defined_vars());
?>
</pre>
<br />

<?php
var_dump(debug_backtrace()); //array(0) { }

function say_hello_to($word) {
    echo "Hello {$word}!<br />";
    var_dump(debug_backtrace());
}
say_hello_to('Everyone');
?>

</body>
</html>