<!DOCTYPE html>
<html>
  <head>
    <title>I'm Learning PHP</title>
    <?php include '../partials/header-assets.php'; ?>
  </head>
  <body>
    <?php include '../partials/header.php'; ?>
    <section id="profile">
      <div class="container">
        <?php
          $profileName = 'No profile found';
          $profileAge = '';
          $profileLocation = '';
          if(isset($_GET["firstname"])){
            $profileName = $_GET["firstname"];
          }
        ?>
        <h2><?php echo htmlspecialchars($profileName); ?></h2>
        <?php
          if(isset($_GET["age"])){
            $profileAge = $_GET["age"];
            echo '<p><strong>Age:</strong> ' . $profileAge . '</p>';
          }

          if(isset($_GET["location"])){
            $profileLocation = $_GET["location"];
            echo '<p><strong>Location:</strong> ' . $profileLocation . '</p>';
          }
        ?>
      </div>
    </section>
    <?php include '../partials/footer.php'; ?>
    <?php include '../partials/footer-assets.php'; ?>
  </body>
</html>