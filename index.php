<?php 
$hello = "Hello World";
$ai = "Companies implementing integrated automated
 artificial intelligence (AutoAI) 
 tools will enable analysts of all skill levels to analyze data streams 
 like data scientists, rapidly build machine learning models, and find actionable insights. 
 In addition, next year AI will be used to rethink and redesign products, services, business
  models and overall strategies. In 2022, the use of AI will not only become more widespread, 
  but also more strategic.";
  $ciccio = $_GET["name"];
  $censor = "***"
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start PHP</title>
</head>
<body>

<h1><?=$hello?></h1>
<p><?=$ai?></p>
<p><?=$ciccio?></p>
<p><?=str_replace($ciccio, $censor, $ai)?></p>
    
</body>
</html>

