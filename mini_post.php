<?php include 'lib/db.php' ?>
<?php
    
    if(!empty($_POST['pseudo']) & !empty($_POST['messages'])){

    

        // Insertion des Messages à m'aide d'une requete préparée
        $req = $pdo->prepare('INSERT INTO users (pseudo, messages) VALUES(?, ?)');
        $req->execute(array($_POST['pseudo'], $_POST['messages']));
        
    }
    header('Location: index.php');
    

?>