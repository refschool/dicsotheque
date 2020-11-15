<?php
  include('includes/header.php');
  include('includes/function-pdo.php');

  if(!isset($_SESSION['email'])){
    header('Location: http://sandbox.test/login.php');
  }



?>

  <body>
  <?php
  include('includes/navbar.php');

  
// je vérifie que email et password ne soient pas vide
// je vérifie que l'utilisateur n'existe pas déjà
// je chiffre le password avec bcrypt

if(isset($_POST['password']) ){
    $crypted_password = password_hash($_POST['password'], PASSWORD_BCRYPT );
    $email = $_POST['email'];
    echo $crypted_password;

}

//insertion dans la base de donnée
function addUser($pdo){

    $sql = "";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    return $result;
  }
  ?>



<div class="container">
        <h1>Création d'un utilisateur</h1>
    <form action="user-add.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input required type="email" class="form-control" name="email" id="exampleInputEmail1" value="toto@gmail.com" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
  <button type="submit" class="btn btn-primary">Créer un utilisateur</button>
</form>
</div>

</body>
<?php
include('includes/snippets.php');
?>
</html>
