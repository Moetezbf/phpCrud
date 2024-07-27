<div class="row">
    <div class="col-lg-12">
        <h2>Etudiants</h2>
    </div>
</div>
<hr />
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Editer un Etudiant
            </div>
            <div class="panel-body">
                <?php
                    require_once("routing/dbconnect.php");
                    $idp = $conn->prepare("SELECT * FROM Student WHERE id=:id");
                    if(isset($query["id"])){
                        $idp->execute(['id' => $query["id"]]);
                    } else {
                        header("Location: /errors/404.php");
                    }
                    $person = $idp->fetch();
                    //var_dump($person);die();
                ?>
                <form class="form-group" action="services/update.php?id=<?php echo $query["id"] ?>" method="POST">
                    <label>Tapez le nom :</label>
                    <input class="form-control" name="nom" placeholder="le nom" required value="<?php echo $person["name"] ?>">
                    <label>Quel age ?</label>
                    <input class="form-control" type="number" name="age" placeholder="l'age" required value="<?php echo $person["age"] ?>">
                    <label>Son groupe :</label>
                    <input class="form-control" name="groupe" placeholder="le groupe" value="<?php echo $person["groupe"] ?>">
                    <hr>
                    <input class="btn btn-success" type="submit">
                    <input class="btn btn-danger" type="reset">
                </form>
            </div>
        </div>
    </div>
</div>