<?php
$my_str = "abc";
printf("original string: %s\n", $my_str);

$my_str[0] = "x";
printf("after modify string: %s\n", $my_str);

printf("string length:%d\n", strlen($my_str));

# test find a string
$my_str = "abc dsa fda";
$pos = strpos($my_str, "fda");
printf("pos:%d\n", $pos);

#test replace
$my_str = "i love china";
$result = str_replace("china", "beijing", $my_str);
printf("replace:%s\treplaced:%s\n", $my_str, $result);
?>
