<?php
//The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again. 
//Link: http://php.net/manual/en/function.require-once.php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/app/registerScript.php';

     if(isset($_SESSION['username'], $_SESSION['id'])){
         header('Location: index.php');
     }
?>

<!-- HTML code that is displayed in the page -->
<div class="container-fluid">
    <div class="row">
        <div class="centered">
          <h2>Heal Parkinson</h2><hr />
            <h2>Register</h2>
            <form action="" method="post">
              	<div class="form-group">
                    <label for="UserEmail1">Username</label>
                    <input type="username" name="username" class="form-control" id="UserName" placeholder="Username">
                </div>
              	
                <div class="form-group">
                    <label for="UserEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="UserEmail1" placeholder="Email">
                </div>
              
                <div class="form-group">
                    <label for="UserEmail1">Password</label>
                    <input type="password" name="password" class="form-control" id="UserPassword" placeholder="Password">
                </div>

                <button type="submit" name="submitBtn" class="btn btn-default btn-lg btn-block">Register</button>
            </form>
            <h2>OR</h2>
            <p>	
                   <a href="<?= $callbackUrl ?>" class="btn btn-block btn-social btn-facebook">
                    <span class="fa fa-facebook"></span> Sign in with Facebook
  				   </a>
               </p>
               <p>
                   <a href="<?= $googleLoginUrl ?>" class="btn btn-block btn-google">
                     <span class="fa fa-google"></span>Login With Google
                 </a>
               </p>

               <p>
                   <a href="<?= $gitHubLoginUrl ?>" class="btn btn-block btn-social btn-github">
                     <span class="fa fa-github"></span>Login With GitHub
                 </a>
               </p>

            <a href="index.php" class="btn btn-link">Back</a>
        </div>
    </div>
</div>

<?php include_once 'footer.php' ?>