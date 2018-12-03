<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript">
    var appInsights=window.appInsights||function(a){
    function b(a){c[a]=function(){var b=arguments;c.queue.push(function(){c[a].apply(c,b)})}}var c={config:a},d=document,e=window;setTimeout(function(){var b=d.createElement("script");b.src=a.url||"https://az416426.vo.msecnd.net/scripts/a/ai.0.js",d.getElementsByTagName("script")[0].parentNode.appendChild(b)});try{c.cookie=d.cookie}catch(a){}c.queue=[];for(var f=["Event","Exception","Metric","PageView","Trace","Dependency"];f.length;)b("track"+f.pop());if(b("setAuthenticatedUserContext"),b("clearAuthenticatedUserContext"),b("startTrackEvent"),b("stopTrackEvent"),b("startTrackPage"),b("stopTrackPage"),b("flush"),!a.disableExceptionTracking){f="onerror",b("_"+f);var g=e[f];e[f]=function(a,b,d,e,h){var i=g&&g(a,b,d,e,h);return!0!==i&&c["_"+f](a,b,d,e,h),i}}return c
    }({
        instrumentationKey: "323fe384-3dcf-474b-8fb0-dc3fc3052caa",
        endpointUrl: "https://soetestapim.azure-api.net"
    });

    window.appInsights=appInsights,appInsights.queue&&0===appInsights.queue.length&&appInsights.trackPageView();
</script>
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