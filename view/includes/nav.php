<!-- menu -->

<?php include("../controller/CategoriesController.php"); 
include("../controller/CartController.php");
$cat = new CategoriesController();
$categories = $cat->getAllCategories();?>

<section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <!--            
            <?php getIp(); ?>
            <?php cart(); ?> -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li class="dropdown"> <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">category <span class="caret"></span> </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <?php foreach ($categories as $cat) :
                    $cat_id = $cat['cat_id'];
                    $cat_title = $cat['cat_title'];

                    echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>"; 
                  ?>
                  <?php endforeach; ?></li>
                </ul>
              </li>

              <li class="hidden-xs"><a href="cart.php">My Cart</a></li>
              <li class="hidden-xs"><a href="checkout.php">Checkout</a></li>
              <?php
                  if (isset($_SESSION['customer_email'])) {
                    echo "<li><a href='logout.php' >Logout</a></li>";
                  } else {
                    echo '<li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>';
                  }
                  ?>
                  <?php
                  if (!isset($_SESSION['customer_email'])) {
                  ?>
                    <li class="hidden-xs"><a href="Register.php">Register</a></li>
              <?php } ?>

              <li style="float:right"><a>
                  <?php
                  if (isset($_SESSION['customer_email'])) {
                    echo "Welcome " . substr($_SESSION['customer_email'], 0, 5);
                  } else {
                    echo "Welcome Guest";
                  }

                  ?></a>
              </li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
  </section>
  <!-- / menu -->