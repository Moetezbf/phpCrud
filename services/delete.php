<?php
    require_once("./classes/CRUD.php");

    $db = new CRUD();
    if(isset($query["id"])){
        $student = $query["id"];
    }
    $db->supp($student);
?>