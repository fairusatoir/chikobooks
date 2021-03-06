<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo path("/percetakan"); ?>">
    <img class="img-fluid" src="<?php echo path("/assets/img/logo.png"); ?>" width=40px alt="">
    &nbsp;Chiko Books
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($_SESSION['page_r']=='home'){echo 'active';} ?>">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item <?php if($_SESSION['page_r']=='order'){echo 'active';} ?>">
        <a class="nav-link" href="order.php">Order</a>
      </li>
      <li class="nav-item <?php if($_SESSION['page_r']=='paper'){echo 'active';} ?>">
        <a class="nav-link" href="paper.php">Paper</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($_SESSION['page_r']=='account'){echo 'active';} ?>" href="account.php">Account</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="proses_logout.php">Sign Out</i></a>
        </li>
      </ul>
    </form>
  </div>
</nav>

<br><br><br><br><br>

<?php include "../popup.php"; ?>
