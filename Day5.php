<?php
//Indexed Array
$a = array(10,30,20,40,60,50,10);
        for($i=0;$i<count($a);$i++){
        echo "<br/>".$a[$i];}
//Associative Array
$b = array(
    0=> 10,
    "a"=> "apple",
    "b"=> "bat",
    7=>  "seven",
    10=> 10.10   
);
foreach ($b as $key => $value) {
    echo "<br/>Key is <b> $key </b>and Vale is <b> $value </b><br/>";
}
//array_sum()
echo "Sum is ".array_sum ($a);
//array_product()
echo "<br/>Product is ".array_product ($a);
//array_reverse()
$revarr = array_reverse($a);
echo "<br/>Reverse Array is ";
print_r($revarr);
//array_rand()
$abc = array_rand($a);
echo "<br/>Random ".$a[$abc]."<br/>";
//array_unique()
print_r(array_unique($a));
//array_merge
$newa = array_merge($a,$b);
echo "<br/>";
print_r($newa);
//array_search()
$check = array_search('bat',$newa);
echo "<br/>";
echo "The Element is at ".$check;
//sort()
sort($a);
echo "<br/>";
print_r($a);
//shuffle()
shuffle($a);
foreach ($a as $key => $value){
    echo "<br/> $value";
}
//end()
echo "<br/>".end($b);
//array_flip()
$fliparray = array_flip($b);
print_r($fliparray);
//array_push()
array_push($a,1,2,3);
print_r($a);
//explode()
$mystring = "I Live In India";
$bcd = explode (" ",$mystring);
echo "<br/>";
print_r($bcd);
