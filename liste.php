<?php 
  include('includes/header.php');

  print_r($_SESSION);

if(!isset($_SESSION['email'])){
  header('Location: http://sandbox.test/login.php');
}

?>
  <body>
  <?php
  include('includes/navbar.php');
  ?>
    <h1>Page de Liste</h1>
</body>


<?php
include('includes/snippets.php');
?>
</html>