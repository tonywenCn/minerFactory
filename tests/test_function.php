<?php
function test_pass_by_value($a) {
    $a[0] = 100;
}

function test_pass_by_ref(&$a) {
    $a[0] = 100;
}

$my_arr = array(1,2,3);

print("pass by value\n");
test_pass_by_value($my_arr);
print_r($my_arr);

print("pass by reference\n");
test_pass_by_ref($my_arr);
print_r($my_arr);
?>
