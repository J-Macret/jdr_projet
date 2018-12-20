<?php require 'php/menu.php'; ?>
<?php

//  CONNEXION BD

require 'php/db.php';

// INSERTION DANS BD

if(isset($_POST)) {
    $erreurs = array();
    if(empty($_POST['titre'])) {
        $erreurs['titre'] = 'Entrez un titre';
    }
    if(empty($_POST['contenu'])) {
        $erreurs['contenu'] = 'Le contenu est vide';
    }
    if(empty($_POST['auteur'])) {
      $erreurs['auteur'] = "Il manque le nom de l'auteur"; 
  }

    if(empty($erreurs)) {
        $requete = $base->prepare('INSERT INTO article SET titre = :titre, contenu = :contenu, auteur = :auteur, jour = NOW()');
        $requete->execute(array(
            ':titre' => $_POST['titre'], 
            ':contenu' => $_POST['contenu'], 
            ':auteur' => $_POST['auteur'],
          ));
    }
}

?>

<h1 class="typo" align="center">Nouveaux articles</h1>


<?php
// SELECTION DANS BD

$requete = $base->prepare('SELECT * FROM article');
$requete->execute();

?>
<div id="card_article" class="container">

<?php while($res = $requete->fetch(PDO::FETCH_OBJ)): ?>
<div class="card bg-light mb-3" style="max-width: 18rem;">
    <img class="card-img-top" src="./img/ranger.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $res->titre; ?> </h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $res->auteur; ?></h6>
    <p class="card-text"><?= $res->contenu; ?><br><?= $res->jour; ?></p>
    <div id="card_btn"><a href="#" class="btn btn-dark">En savoir +..</a></div>
  </div>

</div>

<?php endwhile; ?>

</div>


<?php require 'php/footer.php'; ?>