
<?php

//Function
//Eample-1
function test(){
    echo 'Hello World' . '<br>';
}

test();

//Example-2
function sum(){

    $x = 20;
    $y = 20;

    $result = $x+$y;
    return $result;
}
 echo sum() . '<br>'; //40

 $result = sum()+100;
 echo $result . '<br>';

//Example-3
Function addition($x, $y){
      
    $result = $x+$y;
    return $result;
}

echo Addition(50, 70) . '<br>';  //120

$result = addition(100, 200)+100;

echo $result . '<br>';


//Example-4
function multiply($number){
   $result = addition(500, 500);  //1000

   $multiply = $result*$number;

   return $multiply;

}
echo multiply(50) . '<br>'; //50000


 //Example-5
 function divison($x, $y){
   
    $result = $x/$y;
    return $result;
    
 }
 
//  $addition = 100+100;
//  echo divison($addition, 20); 

 echo divison(addition(100,100), 20) . '<br>'; //10

?>


<?php
// Find a given number is odd or even

$number = [2,3,4,5,26,25,46,47];
$element = sizeof($number);

for($i=0; $i>$element; $i++){
    if($number[$i]%2==0){
        echo $number[$i] . 'The Number is Even = ';
    }

    else{
        echo $number[$i] . 'The Number is Odd = ';
    }
}


// Find a given number is odd or even using Function

function oddEven($number){

        if($number%2==0){
            echo 'Even = ' .$number. '<br>' ;
        }
    
        else{
            echo 'Odd = ' . $number . '<br>' ;
        }
    
}
oddEven(23);


//Find a given number is Possitive or Negative using function

function number($num){
    if($num>0){
        echo 'The Possitive Number is = '.$num . '<br>';  
    }

    else{
        echo 'The Negative Number is = '.$num . '<br>';   
    }
}
number(-2);


//Find the grades of the marks using Array and Function

function markSheet($marks){
    foreach($marks as $element){
        $grade = '';

        if($element>100){
            echo 'The Student Grade is = ' .  $grade = 'Invalid' . '<br>';
        }
        else if($element>=90){
            echo 'The Student Grade is = ' . $grade = 'A+' . '<br>';
        }
        elseif($element>=80){
            echo 'The Student Grade is = ' .  $grade = 'A' . '<br>';
        }
        elseif($element>=60){
            echo 'The Student Grade is = ' .  $grade = 'B+' . '<br>';
        }
        elseif($element>=40){
            echo 'The Student Grade is = ' .  $grade = 'B' . '<br>';
        }
        elseif($element>=30){
            echo 'The Student Grade is = ' .  $grade = 'c' . '<br>';
        }
        else{
            echo 'The Student Grade is = ' .  $grade = 'Fail' . '<br>';
        }
    }
}

$studentMarks = [97,85,101,35,27,55,75,65];
markSheet($studentMarks);

//Find the larger number from the given number

function num($number1,$number2,$number3){
    
    if($number1>$number2 && $number1>$number3){
        echo 'The Largest Number is = ' . $number1 . '<br>';
    }
    elseif($number2>$number1 && $number2>$number3){
        echo 'The Largest Number is = ' . $number2 . '<br>';
    }
    elseif($number3>$number1 && $number3>$number1){
        echo 'The Largest Number is = ' . $number3 . '<br>';
    }

}

num(1,-3,4);


// Find Odd and Evan Number using Array and Function  

function odEv($num){
$element = sizeof($num);   
for($i=0; $i<$element; $i++){
    if($array[$i]%2==0){
        echo $array[$i] . 'The Number is Even = ';
    }

    else{
        echo $array[$i] . 'The Number is Odd = ';
    }
}

}

$array = [2,3,4,5,26,25,46,47];

odEv($array);




?>