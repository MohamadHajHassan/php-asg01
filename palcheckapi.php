<?php
// check if palindrome
$str = $_GET["string"];
$isPalindrome;
$strRev = strrev($str);
if($str == $strRev) {
    $palindrome = "is a palindrome";
}else{
    $palindrome = "is not a palindrome";
};
$results = [
    $str => $palindrome
];
echo json_encode($results);
?>