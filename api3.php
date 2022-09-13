<?php
// return if password is strong or not
$pass = $_POST["pass"];
$longEnough = strlen($pass) > 11;
$hasLowerCase = preg_match('@[a-z]@', $pass);
$hasUpperCase = preg_match('@[A-Z]@', $pass);
$hasNumber = preg_match('@[0-9]@', $pass);
$hasSpecial = preg_match('@[^A-Za-z0-9]@', $pass);

if(!$longEnough || !$hasLowerCase || !$hasUpperCase || !$hasNumber || !$hasSpecial) {
    $res = "Week Password";
} else {
    $res = "Strong password";
};

$results = [
    $pass => $res
];

echo json_encode($results);
?>