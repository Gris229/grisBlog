<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=blogetu;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

/* CECI EST UN TEST POUR S'ASSURER QUE LA LIAISON AVEC LA BD FONCTIONNE SANS AUCUN PROBLEME

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM users';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();
$users = $usersStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($users as $user) {
?>
    <p><?php echo $user['username'].' h '.$user['email']; ?></p>
<?php
}
*/
?>