<?php
try{
    $pdo = new PDO(dsn:'mysql:host=localhost;dbname=pdo_application',username:'root', password:'');

    foreach($pdo->query('SELECT name, email FROM users', PDO::FETCH_ASSOC) as $user){
        echo $user['name'].' '.$user['email'].'<br>';

    }

    foreach($pdo->query('SELECT name, description FROM games',PDO::FETCH_ASSOC) as $game){
        echo $game['name'].' '.$game['description'].'<br>';
    }

    $search = '%.com';
    $sql = 'SELECT users.name,users.email FROM users WHERE email LIKE :search';
    $pdoStatement = $pdo->prepare($sql);
    $pdoStatement->bindValue('search',$search, PDO::PARAM_STR);
    if($pdoStatement->execute()){
        while($user = $pdoStatement->fetch(PDO::FETCH_OBJ)){
            echo '<pre>';
            print_r($user);
            echo '/pre>';
            //echo $user['name'].' '.$user['email'].'<br>';//
        }
        
    }
    else{
        echo 'Une erreur est survenue';
    }
}
catch (PDOException $e){
    echo 'impossible de se connecter à la base de données';
}




?>