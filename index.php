<?php
  include('includes/header.php');
  ?>
    <body>
    <h1>Les Formulaires</h1>
<div class="container">

    <form method="post" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="yvon@gmail.com">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="123456">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>





  </body>

  <?php
  include('includes/snippets.php');
  ?>
  

</html>