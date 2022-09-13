<?php
// displays how many days are left for christmas
$dateSTring = $_GET["date"];
$date = date("Y-m-d", strtotime($dateSTring));
$christmasDate = date("Y-12-25");
// This condition is for the last 6 days of the year to check the difference to the christmas of next year and not the one of the same year
if ($date > $christmasDate){
    $christmasDate =  date('Y-12-25', strtotime($christmasDate . ' +1 year'));
};
$d = date_create($date);
$c = date_create($christmasDate);
$res = date_diff($c, $d, true);
$results = [
    $date => $res->format("%R%a days")
];
echo json_encode($results);
?>