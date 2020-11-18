<?php include("topbar.php")?>


<!-- ======= Header ======= -->
<header id="header">
    <div class="header-container">

      <div class="logo float-left">
        <!-- <h1 class="text-light"><a href="/"><span>Sports Website</span></a></h1> -->
        <!-- Uncomment below if you want to use an image logo -->
        <a href="/"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-flex justify-content-end ">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/about.php">About Us</a></li>
          <li class="drop-down"><a href="">Events</a>
            <ul>
              <li><a href="#">Drop down 1</a></li>
              <li class="drop-down"><a href="#">Latest Events</a>
                <ul>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="/accounts.php">My Account</a></li>
          
          
          <li><a href="/contact.php">Contact Us</a></li>

        </ul>


        <div class="login-info d-flex justify-content-center align-items-center">
          <button class="btn reg-btn s-btn" href="javascript:void(0);" data-toggle="modal" data-target="#LoginModal">Login</button>
          <button class="btn reg-btn p-btn" href="javascript:void(0);" data-toggle="modal" data-target="#RegisterModal">Register</button>  
      </div>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
        <h3>Login</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="icofont-close"></i></span>
        </button>
      </div>
      <div class="modal-body">
  <!-----------------------------------------------
                    Login 
------------------------------------------------->
<?php include("./components/accounts/login.php");?>
      </div>
</div>
</div>
</div>

<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
        <h3>Register</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="icofont-close"></i></span>
        </button>
      </div>
      <div class="modal-body">
  <!-----------------------------------------------
                    Login 
------------------------------------------------->
<?php include("./components/accounts/register.php");?>
      </div>
</div>
</div>
</div>