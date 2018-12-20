<?php

//  CONNEXION BD

require 'php/db.php';?>


<?php
// INSERTION DANS BD
if(isset($_POST)) { //si le bouton est préssé alors $_POST existe donc on teste si $_POST existe
    $erreurs = array(); //on créé un tableau d'erreurs vide
    if(empty($_POST['ndc'])) {
        $erreurs['ndc'] = 'Erreur'; //si le post ndc est vide alors on insère une erreur
    }
    if(empty($_POST['mdp'])) {
        $erreurs['mdp'] = 'Erreur'; //si le post mdp est vide alors on insère une erreur
    }
    if(empty($_POST['email'])) {
        $erreurs['email'] = 'Erreur'; //si le post email est vide alors on insère une erreur
    }
    if(empty($erreurs)) {
        $requete = $base->prepare('INSERT INTO inscription SET ndc = :ndc, mdp = :mdp, email = :email'); //on prepare la requete MAIS il y a des variables (:titre et :texte)
        $requete->execute(array(
            ':ndc' => $_POST['ndc'], //on lui indique ce qu'est la variable :ndc
            ':mdp' => $_POST['mdp'], //on lui indique ce qu'est la variable :mdp
            ':email' => $_POST['email']  //on lui indique ce qu'est la variable :email
        ));
        $requete->closeCursor(); //on ferme la requete
    }
}
?>
<?php require 'php/menu.php'; ?>


    
  <h1  class="typo" align="center">Inscription</h1>
   <div class="container"> 
     
   <form  method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom de compte :</label>
    <input  name="ndc" type="ndc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tapez votre nom de compte">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe :</label>
    <input  name="mdp" type="password" class="form-control" id="exampleInputPassword1" placeholder="Tapez votre mot de passe">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmez votre mot de passe :</label>
    <input  name="confirm" type="password" class="form-control" id="exampleInputPassword1" placeholder="Retapez votre mot de passe">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Votre e-mail :</label>
    <input  name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Tapez votre email">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">S'abonner à la Newsletter</label>
  </div>
  <p class="typo">En vous inscrivant, vous confirmez avoir lu, compris et accepter les Conditions d'utilisation, ainsi qu'être informé(e) de votre droit à l'information.</p>
  <button id="button" type="submit" class="btn btn-light">Terminer l'inscription</button>
</form>
  







              </div>
  
              <?php require 'php/footer.php'; ?>