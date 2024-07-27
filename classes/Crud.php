<?php
    class CRUD {
        public function add($person){
            require_once("../routing/dbconnect.php");
            try {
                $data = [
                    'name' => $person->get_name(), 
                    'age' => $person->get_age(), 
                    'group' => $person->get_group()
                ];
                $conn->prepare("INSERT INTO Student (name, age, groupe) VALUES (:name, :age, :group)")->execute($data);
                header("location: /");
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
            $conn = null;
        }

        function list(){
            require_once("connectdb.php");
            try {
                $sql = "";
                $conn->exec($sql);
                header("location: index.php");
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;
        }

        function edit($person){
            require_once("../routing/dbconnect.php");
            try {
                //var_dump($person);die();
                $conn->prepare("UPDATE Student SET name=:name, age=:age, groupe=:group WHERE id=:id")->execute($person);
                header("location: /");
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
            $conn = null;
        }

        function supp($person){
            require_once("./routing/dbconnect.php");
            try {
                $conn->prepare("DELETE FROM Student WHERE id=?")->execute([$person]);
                header("location: /");
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
            $conn = null;
        }
    }
?>