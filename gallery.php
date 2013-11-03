<?php $page = "gallery" ?>

<!DOCTYPE html>
<html>
  <?php include("partials/head.php") ?>
<body>
  <div id="container">

    <?php include("partials/banner.php") ?>

    <div id='body'>
      <div class="gallery">
      
        <?php $image_location = "posts/1-27-13/photos/quill-01.jpg"; $image_caption = "Dolls and Tea"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/1-28-13/photos/washi-01.jpg"; $image_caption = "Washi tape"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/1-28-13/photos/washi-02.jpg"; $image_caption = "More washi tape"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/1-28-13/photos/washi-03.jpg"; $image_caption = "Even more washi tape"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/1-28-13/photos/washi-04.jpg"; $image_caption = "So much washi tape"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/1-29-13/photos/snowy-01.jpg"; $image_caption = "The view from our bedroom"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/1-29-13/photos/snowy-02.jpg"; $image_caption = "Mac and cheese"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/1-29-13/photos/snowy-03.jpg"; $image_caption = "Steak!"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/10-2-12/photos/funnelcake04.jpg"; $image_caption = "Delicious funnel cake"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/10-2-12/photos/funnelcake02.jpg"; $image_caption = "Knitting with odds and ends"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/2-3-13/photos/hanger01.jpg"; $image_caption = "Knitting tea time"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/2-3-13/photos/hanger04.jpg"; $image_caption = "Fun with hangers"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/2-3-13/photos/hanger05.jpg"; $image_caption = "Hangers!"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/9-22-13/photos/9.22.13-01.jpg"; $image_caption = "Ben likes ice cream"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/9-22-13/photos/9.22.13-02.jpg"; $image_caption = "Scenic Lucky Peak Dam"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/9-22-13/photos/9.22.13-03.jpg"; $image_caption = "Aftermath of the Idaho fire season"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/9-22-13/photos/9.22.13-05.jpg"; $image_caption = "Quilt for the soon-to-be neice"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/9-22-13/photos/9.22.13-06.jpg"; $image_caption = "Quilt and rattle"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/9-22-13/photos/9.22.13-08.jpg"; $image_caption = "Baby pants"; include("partials/gallery_picture.php") ?>
        <?php $image_location = "posts/9-22-13/photos/9.22.13-09.jpg"; $image_caption = "All together"; include("partials/gallery_picture.php") ?>
      </div>
    </div>
    
    <?php include("partials/footer.php") ?>
  </div>
</html>