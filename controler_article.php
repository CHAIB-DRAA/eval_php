<?php
  include("./utils/conect.php");
  include("./Vue/vue_article.php.");
  include ('./model/model_ajouter_article.php');
  if(isset($_POST['nom_article']) and $_POST['nom_article']!=""
  and isset($_POST['prix_article']) and $_POST['prix_article']!=""
 ){
    $nom_article = $_POST['nom_article'];
    $prix_article = $_POST['prix_article'];
   

    ajouter($bdd,$nom_article, $prix_article);


  }


?>