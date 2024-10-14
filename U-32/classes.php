<?php
    class Car{
        // свойства
        public $name;
        public $color = 'green';

        // методы
        function set_name($name) {
            $this -> name = $name;
        }

        function get_name() {
            return $this -> name;
        }
    }

    $bmw = new Car();
    $mercedes = new Car();

    $bmw -> name = 'BMW';
    $mercedes -> name = 'Mercedes Benz';

    $bmw -> set_name('Ferrari');
    echo '<br>';
    echo $bmw -> color;
    echo '<br>';
    echo $bmw -> name;
    echo '<br>';
    echo $mercedes -> color;
    $mercedes -> color = 'blue';
    echo '<br>';
    echo $mercedes -> color;