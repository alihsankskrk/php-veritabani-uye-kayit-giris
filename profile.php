<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
   
    <?php
    session_start();
    if(isset($_SESSION["kullanici_adi"]))
    {
        echo "<h2>HOŞGELDİN</h2>";
        echo "<p>".$_SESSION["kullanici_adi"]."</p>";
        echo "<a href='cikis.php'>ÇIKIŞ YAP</a>";
    }
    else
    {
        echo "Bu sayfayı görüntüleme yetkiniz yoktur";
    }
    ?>
</div>


</body>
</html>
