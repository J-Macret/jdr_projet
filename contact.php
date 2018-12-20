<?php require 'php/menu.php'; ?>
    <h1 class="typo" align="center">Contact</h1>
    
    <div class="container">

        <div class="table_erreur">
            <?php
        if (isset($_POST['boutton'])) {
            $erreurs = array();
        if (empty($_POST['name'])) {
            $erreurs['name'] = 'Pas de nom';
            echo ("Vous n'avez pas entré de nom<br>");
        }
        if (!isset($_POST['message']) || $_POST['message'] == '') {
            $erreurs['message'] = 'Pas de message';
            echo ("Vous n'avez pas saisi de texte<br>");
        }
        if (!isset($_POST['email']) || $_POST['email'] == '') {
            $erreurs['message'] = 'Pas de message';
            echo ("Vous n'avez pas saisi votre mail<br>");
        }
        if (empty($erreurs)) {
            $headers = $_POST['email'];
            mail("macret.jonathan@gmail.com", "Formulaire de mon site de JDR", $_POST['message'], $headers);
            echo ("Votre mail a bien été envoyé.");
        }
    }    
?>
        </div>

        <form method="post">


            <div class="form-group">
                <label for="VotreEmail1">Nom :</label>
                <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Votre nom">
            </div>
            <div class="form-group">
                <label for="VotreEmail1">Adresse Email :</label>
                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Votre mail">
                <small id="emailHelp" class="form-text text-muted">Votre adressse e-mail n'est pas partagée.</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message :
              </label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea" rows="3"></textarea>
            </div>
            <button id="button" name="boutton" type="submit" class="btn btn-light">Envoyer</button><br>
        </form>








    </div>


    <?php require 'php/footer.php'; ?>