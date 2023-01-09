<?php

echo "hence it is working"."<br>";

//index array

$fav=array(2,4,8,9,7,4);
echo $fav[2];



// foreach($fav as $key=>$value){
//     echo $key=$value."<br>";

// };

foreach($fav as $key){
    echo $key;

};

echo "<br>";

//Associated array
$fav2=array("sachin"=>"red","dipesh"=>"green","surya"=>"yellow");
foreach($fav2 as $index=>$value){
    echo       $index."=".$value."<br>";
};



//multidimensional array

$fav3=array(
       array(2,4,5,7,5),
       array(4,8,71,5),
       array(4,8,9,7)
);
// echo var_dump($fav3[0]);
print_r($fav3[0]);

for( $i=0 ; $i<count($fav3) ; $i++){
   for($j=0;$j<count($fav3[$i]);$j++){
    echo $fav3[$i][$j];
    echo "   ";
   };
   echo '<br>';
}

?>