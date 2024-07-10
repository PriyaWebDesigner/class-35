
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

 echo '<br>';

  //Example-6
  function mul($number1){
    $result = divison(400,20);
   return $result*$number1;
  }
  echo mul(100).'<br>';
  $multiply1 = mul(100)*100;
  echo $multiply1.'<br>';

?>


<?php
// Find a given number is odd or even using Array and for loop
 //Example-6

$number = [2,3,4,5,26,25,46,47];
$element = sizeof($number);

for($i=0; $i<$element; $i++){
    if($number[$i]%2==0){
        echo 'The Number is Even = ' . $number[$i] . '<br>' ;
    }

    else{
        echo 'The Number is Odd = ' . $number[$i] . '<br>' ;
    }
}

echo '<br>';


// Find a given number is odd or even using Function
 //Example-7

function oddEven($number){

        if($number%2==0){
            echo 'Even = ' .$number. '<br>' ;
        }
    
        else{
            echo 'Odd = ' . $number . '<br>' ;
        }
    
}
oddEven(23);

echo '<br>';


//Find a given number is Possitive or Negative using function
 //Example-8

function number($num){
    if($num>0){
        echo 'The Possitive Number is = '.$num . '<br>';  
    }

    else{
        echo 'The Negative Number is = '.$num . '<br>';   
    }
}
number(-2);

echo '<br>';


//Find the grades of the marks using Array and Function and foreach loop
 //Example-9

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

echo '<br>';

//Find the larger number from the given number
 //Example-10

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

echo '<br>';

// Find Odd and Evan Number using Array and Function and for loop  
 //Example-11

function odEv($num){
$element = sizeof($num);   
for($i=0; $i<$element; $i++){
    if($num[$i]%2==0){
        echo 'The Number is Even = ' . $num[$i] . '<br>';
    }

    else{
        echo 'The Number is Odd = ' . $num[$i]  . '<br>';
    }
}

}

$array = [2,3,4,5,26,25,46,47];

odEv($array);

echo '<br>';

// Find Posstive and Negative Number using Array and Function and for loop
 //Example-12 

function pN($number){

    $element = sizeof($number);
    for($i=0; $i<$element; $i++){
        if($number[$i]>0){
            echo 'The Possitive Number is = ' . $number[$i] . '<br>';
        }
        else{
            echo 'The Negative Number is = ' . $number[$i] . '<br>';
        }
    }
}

$array = [-1,-4, 5,];
pN($array);

echo '<br>';


// Find Posstive and Negative Number using Array and Function and while loop
 //Example-13

function poNe($number){
    $element = sizeof($number);
    $i=0;
    while($i<$element){
       
   if($number[$i]>0){
            echo 'The Possitive Number is = '. $number[$i]. '<br>';
        }
        else{
            echo 'The Negative Number is = '. $number[$i]. '<br>';
        }
    $i++;
    }
}

$array = [4,5,-3];
poNe($array);

echo '<br>';


// Find Odd and Evan Number using Array and Function and do while loop 
 //Example-14

function oE($num){
    $element = sizeof($num);
    $i=0;
    do{
        if($num[$i]%2==0){
            echo 'The Even Number is = '. $num[$i]. '<br>';
        }
        else{
            echo 'The Odd Number is = '. $num[$i]. '<br>';
        }
    $i++;
    }

    while($i<$element);
}

$array = [25,57,44,66,34,22];
oE($array);

echo '<br>';


//Find the students pass or fail in the exam using do while loop
 //Example-15

$array = [50,30,28];
$element = sizeof($array);

$i=0;
do{
    if($array[$i]>=30){
        echo 'The student is Pass with '. $array[$i]. ' number'. '<br>';
    }
    else{
        echo 'The student is Fail with '. $array[$i]. ' number'. '<br>';
    }

    $i++;
}
while($i<$element);

echo '<br>';


// Write a PHP programme to check whether two numbers are Equal or not using Function
 //Example-16

function check($number1,$number2){

    if($number1==$number2){
        echo 'The Numbers are Equal';
    }
    else{
        echo 'The Numbers are not Equal';
    }
}
check(5678323,5486787);

echo '<br>';


//Find the students pass or fail in the exam using Array and for each loop
 //Example-17

$array = [70,30,20];

foreach($array as $element){
    if($element>30){
        echo 'The Student is Pass in the Exam'. '<br>';
    }
    else{
        echo 'The Student is Fail in the Exam'. '<br>';
    }
}











?>