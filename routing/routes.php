<?php
    $uri = $_SERVER['REQUEST_URI'];

    if($uri == "/"){
        $page = "./pages/list.php";
    } else if($uri == "/ajout"){
        $page = "./pages/ajout.php";
    } else {
        $url = parse_url($_SERVER['REQUEST_URI']);
        //var_dump($url);
        if(isset($url["query"])){
            parse_str($url["query"], $query);
            if ($url["path"] == "/edit") {
                $page = "./pages/edit.php"/*.$query["id"]*/;
            } else if($url["path"] == "/supp"){
                $page = "./services/delete.php";
            }
        } else {
            function error_found(){
                header("Location: /errors/404.php");
            }
            set_error_handler('error_found');
        }
    }
?>