<?php
class Car {
    function Car() {
        $this->model = "BMW";
    }
}

$c = new Car();
printf("%s\n", $c->model);
?>
