<?php
$uur = date (format: 'H');
if( $uur >= 0 && $uur < 6){
    $result = 'goedenacht';
    } else if( $uur >= 6 && $uur < 12){
    $result = 'goedemorgen';
    } else if( $uur >= 12 && $uur < 18){
    $result = 'goedemiddag';
    } else if( $uur >= 18 && $uur < 00){
    $result = 'goedeavond';
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$result = $uur;
?>
</body>
</html>