<?php
  session_start();
  unset($_SESSION["name"]);
  session_destroy();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="0; url=<?php echo $_SERVER['HTTP_REFERER']; ?>" />
</head>
<body>
  
</body>
</html>