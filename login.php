<?php
  include('includes/header.php');

// je vérifie que email et password ne soient pas vide
// je vais chercher dans la table utilisateur que l'utilisateur existe
// si n'existe pas je redirige vers error.php avec un message d'erreur (contient un lien pour rediriger vers index.php)
// si l'utilisateur existe on va définir une session authentifiée (l'utilisateur est loggé))
// si connecté propose le logout
print_r($_POST);

if(count($_POST) > 0){
  if($_POST['email'] == 'yvon@gmail.com' && $_POST['password'] == '123'){
    $_SESSION['email'] = 'yvon@gmail.com';
    header('Location: http://sandbox.test/liste.php');
  }

} else {

  ?>

  <body>
  <?php
  include('includes/navbar.php');
  ?>
    <h1>Page de login</h1>

<div class="container">
    
    <form action="login.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="yvon@gmail.com" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
  <button type="submit" class="btn btn-primary">Soumettre</button>
</form>
</div>

</body>
<?php
include('includes/snippets.php');
?>
</html>

<?php
}
?>