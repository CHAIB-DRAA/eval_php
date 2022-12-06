<?php 
function ajouter($bdd,$nom_article, $prix_article){ 
try{

    echo("yes");
    $req = $bdd->prepare('insert into article (nom_article, prix_article) values(?,?)');
    $req->bindParam(1, $nom_article ,PDO::PARAM_STR);
    $req->bindParam(2, $prix_article,PDO::PARAM_STR);
    $req->execute();
    echo"<p>L'Utilisateur $nom_article $prix_article a bien été enregistré.</p>";
}catch(Exception $error){
    //affichage d'une exception en cas d’erreur
    die('Erreur : '.$error->getMessage());
}
}

?>