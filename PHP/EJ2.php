<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta refresh>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
date_default_timezone_set("Spain/Madrid");
setlocale(LC_ALL,"es_ES.UTF-8");
echo ucwords(strftime("%A %D %B %Y"));

?>

</body>
</html>