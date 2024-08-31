<?php

echo "conditional statement";
$showVariable = true;
$name = "Denzel"


if($showVariable == true){

    echo $name;

}elseif($showVariable && $name == "Denzel" && $auth){

    echo "hello" .$name

}
else{

    echo "else statement";
}
echo $showVariable == true ? $name : "\nshort hand else";
echo $showVariable;
?>