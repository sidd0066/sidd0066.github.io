<footer>
  <div class="container">
    <nav class="nav nav--footer">
      <ul class="nav__menu">
        <li><a href="/">Home</a></li>
        <li><a href="/pages/about.php">About</a></li>
      </ul>
    </nav>
  </div>
</footer>

<?php
  if(isset($_GET["dismissed"])){
    if($_GET["dismissed"] == 'true'){
      $numDays = 1;
      $expiration = time() + (86400 * $numDays);
      setcookie("dismissed", 'true', $expiration, "/");
    }elseif($_GET["dismissed"] == 'false'){
      unset($_COOKIE["dismissed"]);
    }
  }
?>

<?php
  $showNotification = true;
  if(isset($_COOKIE["dismissed"])){
    if($_COOKIE["dismissed"] == 'true'){
      $showNotification = false;
    }
  }
?>

<?php if($showNotification == true) : ?>
  <div class="notification notification--footer">
    <p>This is an example of a dismissable footer notification.</p>
    <a href="?dismissed=true" class="button notification__dismiss">
      Dismiss
    </a>
  </div>
<?php endif; ?>