<?php
    class Person {
        protected $name;
        protected $age;
        
        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        function get_name() {
            return $this->name;
        }

        function set_name($name) {
            $this->name = $name;
        }

        function get_age() {
            return $this->age;
        }

        function set_age($age) {
            $this->age = $age;
        }
    }
?>