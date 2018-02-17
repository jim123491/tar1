<?php
$text =
    "Дым табачный воздух выел
Комната —
глава в крученыховском аде.
Вспомни —
за этим окном
впервые 
руки твои, исступлённый, гладил.
Сегодня сидишь вот,
сердце в железе.
День ещё —
выгонишь,
может быть, изругав.
В мутной передней долго не влезет
сломанная дрожью рука в рукав.";
$array = explode("\n", $text);// lines break

function cut($stroki){//function for trimming unseen elements
    return trim($stroki);//trimming at the beginning and end of the line
}
$arraycut = array_map("cut",$array);// array of truncated strings

function symbol($a)//function that splits strings into characters in an array
                   // and removes from them the first empty element
{
   $a = preg_split("//u",$a);//partitioning an array string through a regular expression
     unset($a [0], $a[count($a)]);//Delete the 0th element in a broken line
     return $a;
}
$arrayOfSymbol = array_map("symbol", $arraycut);//two-dimensional array of strings divided by symbols
print_r($arrayOfSymbol);
$t = (count( max($arrayOfSymbol))) +1;//determining the maximum number of elements (arrays of symbols) in a string array
function add ($v){//function of equalizing the length of nested arrays
    global $t;//global variable declaration
$l = array_pad($v, $t, " ");//assignment of $l space-extended array
   return $l;//return an elongated array
}
$arrayOfSymbollong = array_map("add",$arrayOfSymbol);//array of equal lengths of nested arrays
for($i = 0; $i <=32 ;$i++ )//opening a loop that considers the elements of an (internal) nested array
{
    for ($r = 0; $r <= 13; $r++)//Opening a loop that considers the elements of an external array
   {
      echo $arrayOfSymbollong[$r][$i]."|";//output elements of a multidimensional array through the sign "|"
    }
    echo "\n";//line translation
}




