<?php
//The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again. 
//Link: http://php.net/manual/en/function.require-once.php
//We use require_once becuse we have different files that are used in this code
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/app/fb_setup.php';
require_once __DIR__ . '/app/gp_setup.php';
require_once __DIR__ . '/app/git_setup.php';
require_once __DIR__ . '/app/loginScript.php';
?>
<!-- HTML code that is displayed in the page -->
<div class="container-fluid">
   <h1>eHealth PD Application</h1><hr />
    <div class="row">
        <div class="centered">
         
          <?php if(isset ($_SESSION['errors'])):  ?>
          		<p> <?= $_SESSION['errors'] ?> </p>
          <?php endif; ?>
          
          <?php if(isset($_SESSION['username'], $_SESSION['id'])): ?>
                <h2>You are logged in as <?= $_SESSION['username']?> </h2>
                <img src="<?= $_SESSION['avatar']; ?>" alt="<?= $_SESSION['username'] ?>"
                     width="180" height="180">

                <h2>
                    <a href="logout.php" class="btn btn-link pull-right">Logout</a>
                </h2>
            <?php else: ?>
          		<p>
                    <a href="register.php" class="btn btn-default btn-lg btn-block">Register</a>
                </p>
                <p>
                    <a href="login.php" class="btn btn-default btn-lg btn-block">Login</a>
                </p>
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
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include_once 'footer.php' ?>

