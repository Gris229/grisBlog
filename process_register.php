<?php
//DATABASE Connexion
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=blogetu;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

//Put inputs data in variables
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$hash_pw = trim($_POST['password']);
$password1 = trim($_POST['password1']);
$error = '';

$sqlQuery = 'SELECT username FROM users WHERE username = :username';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute([
    'username' => $pseudo,
]);
$users = $usersStatement->fetchAll();

$sqlQuery1 = 'SELECT username FROM users WHERE email = :email';
$users1Statement = $mysqlClient->prepare($sqlQuery1);
$users1Statement->execute([
    'email' => $email,
]);
$users1 = $users1Statement->fetchAll();


// Check if all inputs are not null
if (strlen($pseudo) > 0 && strlen($email) > 0 && strlen($hash_pw) > 0) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
    
        if(count($users) > 0){
            $error ='Pseudo already exists';
        }elseif(count($users1) > 0){
            $error ='Email already exists';
        }else{
            if (strlen($hash_pw) < 8){
                $error = 'MDP must be >= 8';
            }else{
                if($hash_pw !== $password1){
                    $error = 'MDPs not the same';
                }else{
                    $hashed_pw = hash('sha256', $hash_pw);
                    $sqlQuery2 = 'INSERT INTO users(username, email, hash_pw) VALUES (:username, :email, :hash_pw)';
                    $insertStatement = $mysqlClient->prepare($sqlQuery2);
                    $insertStatement->execute([
                        'username' => $pseudo,
                        'email' => $email,
                        'hash_pw' => $hashed_pw,
                    ]);
                    $error = 'OKAY LETS GOOO TO LOGIN PAGE';
                }
                
            }
        }
    
    

    } else {
        $error = 'Invalid email format.';
    }

}

?>