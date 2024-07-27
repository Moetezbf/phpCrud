<?php
    require_once("Person.php");
    class Student extends Person
    {
        private $group;

        function __construct($name, $age, $group)
        {
            $this->group = $group;
            parent::__construct($name, $age);
        }

        function get_group()
        {
            return $this->group;
        }

        function set_group($group)
        {
            $this->group = $group;
        }
    }
?>