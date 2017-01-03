<?php
$my_str = "hello world\n";
print($my_str);

$my_int = 1;
printf("%d\n", $my_int);

$my_float = 0.1;
printf("%.4f\n", $my_float);

$my_bool = True;
printf("bool:%d\n", $my_bool);

$my_arr = array(1,2,3,5);
printf("my_arry:");
foreach($my_arr as $item) {
    printf("%d:", $item);
}
printf("\n");

$my_dict = ["a" => "1", "b" => "2"];
var_dump($my_dict);

?>
