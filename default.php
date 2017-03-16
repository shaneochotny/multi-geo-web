<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css" />
<head>
  <title>shaneochotny.com - The greatest website ever!</title>
  <meta charset="UTF-8">
</head>

<body>
    <h1>
<?php
    $runningGeo = getenv('Geo');
    echo "Hi! You're in the <b>" . $runningGeo . "</b> Azure Region.";
?>
    </h1>
</body>
</html>