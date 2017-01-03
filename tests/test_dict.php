<?php
$my_dict = ['a' => '1', "b" => "2"];
foreach ($my_dict as $k => $v) {
    printf("key=%s\tvalue=%s\n", $k, $v);
}

printf("array_keys function test:\n");
print_r(array_keys($my_dict));

$my_dict = array(1,2,3);
print_r(array_keys($my_dict));


$my_dict1 = array(1=>2,2=>3,3=>5);
$my_dict2 = array(5=>7,6 => 1, 7 => 9);
printf("test array union");
print_r($my_dict1 + $my_dict2);
?>
