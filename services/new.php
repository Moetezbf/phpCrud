<?php
    require_once("../classes/Student.php");
    require_once("../classes/CRUD.php");

    $name = $_POST["nom"];
    $age = $_POST["age"];
    $group = $_POST["groupe"];
    $gender = $_POST["gender"];
    $langue = $_POST["langue"];
    var_dump($_POST);die();

    $student = new Student($name, $age, $group);
    $db = new CRUD();
    $db->add($student);
?>