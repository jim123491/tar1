<?php
$handle = fopen ("create.txt","w+");        //create a file
$randomFizBuz = [rand(1, 9),rand(1, 9),rand(1, 99)];        // create array with three random number
echo " fizz = $randomFizBuz[0]\n buzz = $randomFizBuz[1]\n end  = $randomFizBuz[2]\n";     //visualization array elements to variables
fwrite($handle, "$randomFizBuz[0]\n$randomFizBuz[1]\n$randomFizBuz[2]");     //write to file "create.txt" 3 string variables
$getFromFileArray = file("create.txt");    // create array with three elements with value(fizz, buzz, end) taken from file "create.txt"
$arrayEnd = range(1,($randomFizBuz[2]));     // create array given length
 function fizBuz($item){
     global $getFromFileArray;    //enable functions to see array with values Fizz & Buzz
    return  (!($item % $getFromFileArray[0] ) && !($item % $getFromFileArray[1])) ? "fb " : ((!($item % $getFromFileArray[0])) ? "f " : ((!($item % $getFromFileArray[1])) ? "b ": "$item ")) ;
}
$resultFunction = array_map("fizBuz", $arrayEnd);   // put the result of work function in array
$fizzBuzz = implode("",$resultFunction);    // convert array to string
echo "$fizzBuzz\n";        //output of result
fclose($handle);          //close the file "create.txt"
unlink("create.txt");       //deleting a file "create.txt"