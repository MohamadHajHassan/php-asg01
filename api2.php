<?php
// return the result of: a^3 + b*c - a/b
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$res = $a ** 3 + $b * $c - $a / $b;
$results = [
    "a^3 + b*c - a/b" => $res
];
echo json_encode($results);
?>