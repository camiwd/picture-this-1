<?php 

require __DIR__ . '/views/header.php';

 ?>
 
 <h1>Register an account</h1>
 <?php if (isset($_SESSION['errors'])){ ?>
   <?php foreach ($_SESSION['errors'] as $error){ ?>
     <p><?php echo $error ?></p>
   <?php }; ?>
   <?php unset($_SESSION['errors']) ?>
 <?php }; ?>
 <form class="makeAccount" action="/app/users/createAccount.php" method="post">
   <label for="email">Email</label>
   <input type="text" name="email" value="" placeholder="example@example.se" required>
   <label for="username">Username</label>
   <input type="username" name="username" value="" placeholder="theBeastMaster" >
   <label for="password">Password</label>
   <input type="password" name="password" value="" required>
   <button type="submit" name="button">Create Account</button>
 </form>
 
 
 
 
 
 
 <?php 

 require __DIR__ . '/views/footer.php';

  ?>