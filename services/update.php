<?php
    require_once("../classes/CRUD.php");

    $db = new CRUD();
    /*$id = $_GET["id"];
    var_dump($id);die();*/
    $student = [
        'name' => $_POST["nom"], 
        'age' => $_POST["age"], 
        'group' => $_POST["groupe"],
        'id' => $_GET["id"]
    ];
    $db->edit($student);
?>