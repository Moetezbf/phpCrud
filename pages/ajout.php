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
                Ajout d'un Etudiants
            </div>
            <div class="panel-body">
                <form class="form-group" action="services/new.php" method="POST">
                    <label>Tapez le nom :</label>
                    <input class="form-control" name="nom" placeholder="le nom" required>
                    <label>Quel age ?</label>
                    <input class="form-control" type="number" name="age" placeholder="l'age" required>
                    <label for="group">Son groupe :</label>
                    <select class="form-control" id="group" name="groupe">
                        <option value="tic1Q">tic1Q</option>
                        <option value="tic1R">tic1R</option>
                        <option value="tic1S">tic1S</option>
                        <option value="tic1T">tic1T</option>
                    </select>
                    <label for="h">Genre :</label>
                    <input type="radio" id="h" name="gender" value="Homme"> Homme
                    <input type="radio" id="f" name="gender" value="Femme"> Femme
                    <br>
                    <label for="ar">Langues :</label>
                    <input type="checkbox" id="ar" name="langue" value="Arabe"> Arabe
                    <input type="checkbox" id="fr" name="langue" value="Français"> Français
                    <input type="checkbox" id="en" name="langue" value="Anglais"> Anglais
                    <hr>
                    <input class="btn btn-success" type="submit">
                    <input class="btn btn-danger" type="reset">
                </form>
            </div>
        </div>
    </div>
</div>