<?php
$my_arr = array(5,1,4,3);

print("sort ascend\n");
sort($my_arr);
print_r($my_arr);

print("sort descent\n");
rsort($my_arr);
print_r($my_arr);


$my_arr2 = array(array(1,2), array(4,3), array(0, 1), array(4,2));

function cmp($k1, $k2) {
    if ($k1[0] != $k2[0]) {
        return $k1[0] - $k2[0];
    } elseif ($k1[1] != $k2[1]) {
        return $k1[1] - $k2[1];
    }
    return 0;
}

usort($my_arr2, "cmp");
print_r($my_arr2);
foreach ($my_arr2 as $k => $v) {
    print_r($v);
}

?>
