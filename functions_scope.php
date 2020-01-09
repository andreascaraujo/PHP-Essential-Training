<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions: Scope</title>
</head>
<body>

<?php 

$bar = "outside"; // global scope

function foo() {
    global $bar; // brings in from the global scope 
    if(isset($bar)) {
        echo "foo: " . $bar . "<br />";
    }
    $bar = "inside"; // local scope
}

echo "1: " . $bar . "<br />"; // outside
foo();
echo "2: " . $bar . "<br />"; // inside (after the global $bar;)

?>

</body>
</html>