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
                Liste des Etudiants
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>age</th>
                                <th>groupe</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("routing/dbconnect.php");
                            try {
                                $stmt = $conn->prepare("SELECT * FROM Student");
                                $stmt->execute([]);
                                $data = $stmt->fetchAll();
                                foreach ($data as $row) {
                            ?>
                                    <tr>
                                        <td><?php echo $row["name"] ?></td>
                                        <td><?php echo $row["age"] ?></td>
                                        <td><?php echo $row["groupe"] ?></td>
                                        <td>
                                            <a href="/edit?id=<?php echo $row['id'] ?>" class="btn btn-primary">modifier</a>
                                            <a href="/supp?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="confirm('êtes-vous sûre !!')">supprimer</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } catch (PDOException $e) {
                                echo "<tr><td colspan='4'>" . $e->getMessage() . "</td></tr>";
                            }
                            $conn = null;
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>name</th>
                                <th>age</th>
                                <th>groupe</th>
                                <th>actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>