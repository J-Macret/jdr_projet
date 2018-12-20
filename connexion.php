<?php require 'php/menu.php'; ?>
<?php

//  CONNEXION BD

require 'php/db.php';?>


<form  method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom de compte :</label>
    <input  name="ndc" type="ndc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tapez votre nom de compte">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe :</label>
    <input  name="mdp" type="password" class="form-control" id="exampleInputPassword1" placeholder="Tapez votre mot de passe">
  </div>
 
  <p class="typo">En vous inscrivant, vous confirmez avoir lu, compris et accepter les Conditions d'utilisation, ainsi qu'être informé(e) de votre droit à l'information.</p>
  <button id="button" type="submit" class="btn btn-light">Se Connecter</button>
</form>

<?php require 'php/footer.php'; ?>