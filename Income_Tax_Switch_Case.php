<?php
// Gross income in lakhs
$grossIncome = 44; // change this value to test

$tax = 0;
$rate = "";

switch (true) {

    case ($grossIncome < 5):
        $tax = 0;
        $rate = "0%";
        break;

    case ($grossIncome >= 5 && $grossIncome < 10):
        $tax = $grossIncome * 0.10;
        $rate = "10%";
        break;

    case ($grossIncome >= 10 && $grossIncome < 15):
        $tax = $grossIncome * 0.15;
        $rate = "15%";
        break;

    case ($grossIncome >= 15 && $grossIncome < 20):
        $tax = $grossIncome * 0.20;
        $rate = "20%";
        break;

    default:
        // Income 20 lakh and above
        $tax = $grossIncome * 0.25;
        $rate = "25%";
}

echo "Gross Income: ₹{$grossIncome} lakh<br>";
echo "Tax Rate: {$rate}<br>";
echo "Tax Amount: ₹{$tax} lakh<br>";

echo "This Program is written and executed by Mannan Tayal 0231bca047<br>";
?>
