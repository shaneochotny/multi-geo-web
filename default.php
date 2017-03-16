<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css" />
<head>
  <title>shaneochotny.com - The greatest website ever!</title>
  <meta charset="UTF-8">
</head>

<body>
    <div class="outer">
        <div class="middle">
            <div class="inner">
                <img src="profilepicture.png" width="250px">
                <h1>
                <?php
                    $runningGeo = getenv('Geo');
                    echo "Hi! You're in the <b>" . $runningGeo . "</b> Azure Region.";
                ?>
                </h1>
            </div>
        </div>
    </div>

</body>
</html>