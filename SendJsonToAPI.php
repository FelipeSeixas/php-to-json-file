<?php 

// Felipe Seixas Developer

echo "Convert/export to JSON file - Easy and practice";

//SINTAXE ---->  Key => values
$array_v1 = array(
    "foo"=>"bar",
    "bar"=>"foo"
);

//echo $array_v1;
var_dump($array_v1);

$json = json_encode($array_v1);
var_dump($json);

//Show the path this project
echo __FILE__;
echo dirname(__FILE__);

//Write the JSON in file
file_put_contents('array_v1.json', $json);

echo "\n...end of software.";

//https://www.php.net/manual/en/language.types.array.php
//e o arquivo já existir, seu conteúdo será sobrescrito. Se você quiser adicionar ao arquivo existente, use a flag FILE_APPEND. Por exemplo, file_put_contents('meu_arquivo.json', $json, FILE_APPEND);.

?>