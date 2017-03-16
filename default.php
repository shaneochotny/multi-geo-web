<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css" />
<head>
  <title>shaneochotny.com - The greatest website ever!</title>
  <meta charset="UTF-8">
</head>

<body>

<?php
    $runningGeo = ("Hi! You're in Azure Region: " . getenv('Geo'));
    echo $runningGeo;
?>

</body>
</html>