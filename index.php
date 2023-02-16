<?php include 'lib/db.php' ?>
<?php include 'partials/header.php' ?>





<form action="mini_post.php" method="post" class="form">
  <div class="text-group champ">
    <label for="pseudo">Votre pseudo</label>
    <input type="text" id="pseudo" name="pseudo" class="form-control col-sm-4">
  </div>

  <div class="text-group champ">
    <label for="message">Votre message</label>
    <textarea class="form-control" id="messages" name="messages" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Envoyez</button>
</form>
</form>



<h1>Liste des Messages récents</h1>

<?php
  $reponse = $pdo->query('SELECT pseudo, messages FROM users ORDER BY ID DESC LIMIT 0, 10');

  while($donnees = $reponse->fetch()){
    echo '<p><strong>'. htmlentities($donnees['pseudo']) . ':</strong>  '. htmlentities($donnees['messages']) . '</p>';
  }

  $reponse->closeCursor();
?>

