<?php $page = "blog" ?>

<?php
  require_once "resources/Dao.php";
  $dao = new Dao();

  require 'vendor/autoload.php';
  use Mailgun\Mailgun;

  $mg = new Mailgun("key-0qc796hgz3c1ke5wt4rw58ysavrbk0o9");
  $domain = "cricketandbea.com";

$mg->sendMessage($domain, array('from'    => 'ben@example.com', 
                                'to'      => 'thegreen101331@gmail.com', 
                                'subject' => "Fuck Sendgrid, it's a bitch, MailGun rules!", 
                                'text'    => 'I appologize for the 160 messages you are going to get before I turn this off, but it was so worth it.'));


?>

<!DOCTYPE html>
<html>
  <?php include("partials/head.php") ?>
<body>
	<div id="container">
    <?php include("partials/banner.php") ?>
    <div id="body">
      <div class="bio">
        <img src="assets/images/bio-pic.jpg" alt="Catie">
        <p>i knit, sew, quilt, crochet, bake, and sometimes embroider. you can see it all right here at cricket and bea.</p>
      </div>
      
      <div class="posts">
        <h2>Recent Posts</h2>
        <hr></hr>
          <div class="post-container">
          <a classs="post-link" href="posts/9-22-13/road-trip.php">
            <div class="post-pic-container">
              <img class="post-pic" src="posts/9-22-13/photos/9.22.13-03.jpg" alt="lucky peak">
            </div>
            <div class="post-title-container">
              <h3>Roadtrip and a New Baby Package</h3>
              <h3><small>Sunday, September 22, 2013</small></h3>
            </div>
          </a>
        </div>
        <div class="clear"></div>

        <div class="post-container">
          <a classs="post-link" href="posts/2-3-13/happy-hangers.php">
            <div class="post-pic-container">
              <img class="post-pic" src="posts/2-3-13/photos/hanger01.jpg" alt="happy-hanger">
            </div>
            <div class="post-title-container">
              <h3>"happy hangers" - dottie angel</h3>
              <h3><small>Sunday, February, 2013</small></h3>
            </div>
          </a>
        </div>
        <div class="clear"></div>

        <div class="post-container">
          <a classs="post-link" href="posts/1-29-13/cozy-snowy.php">
            <div class="post-pic-container">
              <img class="post-pic" src="posts/1-29-13/photos/snowy-01.jpg" alt="snowy-boise">
            </div>
            <div class="post-title-container">
              <h3>cozy, snowy nights</h3>
              <h3><small>Tuesday, January 29, 2013</small></h3>
            </div>
          </a>
        </div>
        <div class="clear"></div>

        <div class="post-container">
          <a classs="post-link" href="posts/1-28-13/washi-tape.php">
            <div class="post-pic-container">
              <img class="post-pic" src="posts/1-28-13/photos/washi-01.jpg" alt="washi tape">
            </div>
            <div class="post-title-container">
              <h3>diy washi tape - not exactly practical, but oh-so-pretty</h3>
              <h3><small>Monday, January 28, 2013</small></h3>
            </div>
          </a>
        </div>
        <div class="clear"></div>

        <div class="post-container">
          <a classs="post-link" href="posts/1-27-13/quill.php">
            <div class="post-pic-container">
              <img class="post-pic" src="posts/1-27-13/photos/quill-01.jpg" alt="quills and puppets">
            </div>
            <div class="post-title-container">
              <h3>a little quill and some paper mache</h3>
              <h3><small>Sunday, January 27, 2013</small></h3>
            </div>
          </a>
        </div>
        <div class="clear"></div>

        <div class="post-container">
          <a classs="post-link" href="posts/10-2-12/funnel-cakes.php">
            <div class="post-pic-container">
              <img class="post-pic" src="posts/10-2-12/photos/funnelcake02.jpg" alt="knitting">
            </div>
            <div class="post-title-container">
              <h3>funnel cakes and knitting</h3>
              <h3><small>Tuesday, October 2, 2012</small></h3>
            </div>
          </a>
        </div>
        <div class="clear"></div>

      </div>
      <div class="clear"></div>
    </div>


    <?php
    $users = $dao->getUsers();
    echo "<table>";
    foreach ($users as $user) {
      echo "<tr>";
      echo "<td>" . $user["first_name"] . "</td>";
      echo "<td>" . $user["last_name"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    ?>



    <?php include("partials/footer.php") ?>
  </div>
</html>