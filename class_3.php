<?php
echo "Expl:1 ";
function getGreatherNum($num1,$num2,$num3,$num4)
{
    $a = $num1;
    $b = $num2;
    $c = $num3;
    $d = $num4;

    if ($a > $b && $b > $c && $b > $d){
        echo "A is the geather Number";}

        elseif ($b > $a && $b > $c && $b > $d){
            echo " B is the grather Number";
        }
        elseif ($c > $a && $c > $b && $c > $d){
            echo " C is the grather Number";
        }
        else {
            echo " D is the geather Number";
        }
}

getGreatherNum(12,121,600,332);

echo "</br>";

echo "Expl:2 ";
$userNmae = 'Riudan';

var_dump(ctype_alpha($userNmae));

echo "</br>";

echo "Expl:3 ";

$userName = 'Riduan';

if (ctype_alpha($userName)==1){
    echo"Welcome $userName";
} else { echo "Sorry you invalid";
}

echo "</br>";

echo "Expl:4 ";
$userName = '172572';

if (is_numeric($userName)){
    echo"Your Roll: $userName .";
} else { echo "Sorry you invalid";
}

echo "</br>";

echo "Expl:5 ";

$num = 31;
if ($num %2 == 0){
    echo "$num is a positive num";
}else{
    echo "$num is a neg num";
}

echo "</br>";

echo "Expl:6 ";

$userEmail = "test123@gmail.com";
$userPassword = "test123";

if ($userEmail == "test123@gmail.com"){
    if($userPassword == "test123"){
        echo " Login";
    }else{
        echo"Your Password is invalid";
    }
    }else{
    echo "Your email addres is invalid";
}

echo "</br>";

echo "Expl:7 ";


function payPerMonth($amount = 0,$year = 1,$int = 10){

    $amount = $amount;
    $year = $year;
    $intarest = $int;
    
    $totalIntarest = ($intarest / 100) * $year;
    
    $totalIntarestMoney = $amount * $totalIntarest;
    
    $totalPayable = $amount + $totalIntarestMoney;
    
    $perMonthPayable = $totalPayable / ($year * 12);
    
    return round($perMonthPayable);



}

payPerMonth(10000,1,10);

// --------------------------//

function getloan ($income,$expense,$payPerMonth){
    
$totalIcome = $income;
$totalCost = $expense;
$totalSaving = $totalIcome - $totalCost;
if($totalSaving > $payPerMonth){
    echo " you are eligible for loan.you have to  pay per month $payPerMonth";
}else{
    echo " I am sorry.";
}

}

getloan(10000,1000 ,payPerMonth(50000,1,20));

echo "</br>";

echo "Expl:8 ";

$number = 1;
echo $number  % 2 == 0 ? " Even Number" : "Odd Number";