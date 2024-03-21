<?php
session_start();
//print_r($_GET);
?>


<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="getData.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="utils.js"></script>
  <title>SkinCare</title>
</head>

<body>
    
   
<?php
    extract($_GET);
    if (isset ($prog)) {
         if ($prog != "login.php" && $prog != "register.php") {
                include 'navbar.php';
                include $prog;
        }else
                include $prog;
    } else {
        include 'navbar.php';
        include 'fooldal.php';
        include 'footer.php';
    }
    ?>
    </div>

  
</body>

</html>