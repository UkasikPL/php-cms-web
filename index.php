<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IP Calculator by InTechTips</title>
    <?php
      if (!isset($_GET['p'])) {
        header("Location: ?p=home");
        exit();
      }
      include_once('data.php');
    ?>
    <!--STYLE-->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontello.css">
  </head>
  <body>
    <div id="wrapper">

      <div id="top">
        <span class="g">In</span>
        <span class="r">Tech</span>
        <span class="g">Tips</span>
        <div class="hr"></div>
        <span class="g">IP</span>
        <span class="r2">Calculator</span>
      </div>

      <div class="version rel">
          <div class="version abs_social">
            <?php echo print_social();?>

          </div>
          <div class="version abs_version">Latest Version: <?php echo $LatestVersion; ?></div>
      </div>

      <nav>
        <div class="vr"></div>
        <a href="?p=home" <?php checkActive("home") ?>>Home</a>
        <div class="vr"></div>
        <a href="?p=download" <?php checkActive("download") ?>>Download</a>
        <div class="vr"></div>
        <a href="?p=contact" <?php checkActive("contact") ?>>Contact</a>
        <div class="vr"></div>
        <a href="?p=donate" <?php checkActive("donate") ?>>Donate</a>
        <div class="vr"></div>
      </nav>

      <div id="content">
        
          <?php print_content(); ?>
      </div>

      <footer>
        <span><?php echo $Year; ?> &copy <span class="g">In</span><span class="r">Tech</span><span class="g">Tips</span>. All rights reserved.</span>
      </footer>

    </div>
  </body>
</html>
