
<div class="d-xl-block d-sm-none desktop">
<div class="cont">
  <div class="form sign-in position-relative">
    <h2>Welcome back,</h2>
       <?php include("login.php")?>
  </div>

  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Time to feel like home,</h2>
      <?php include("register.php")?>
    </div>
  </div>
</div>
</div>

<div class="d-xl-none d-sm-block mobile my-5">
  <div class="container">
    <div class="row justify-content-center align-items-center">
    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Login</a></li>
        <li class="tab"><a href="#login">Sign Up</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">   
        <h2>Welcome back,</h2>
       <?php include("login.php")?>
        </div>
        
        <div id="login">   
        <h2>Time to feel like home,</h2>
         <?php include("register.php")?>          
        </div>

      </div>

    </div>
  </div>
</div>
