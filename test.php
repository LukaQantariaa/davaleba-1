<?php

    if($_SERVER['REQUEST_METHOD'] == 'GET') { // თუ გაიგზავნა GET მოთხოვნა... 
        $infos = array("HTTP_HOST", "REQUEST_METHOD"); //აქ ჩაიწერება ის თუ რის შესახებ სურს მომხმარებელს ინფორმაციის გამოტანა. პირობითად აღებული მაქვს HTTP_HOST და REQUEST_METHOD;
        foreach($infos as $info) { // გადაყვება ყველა ჩანაწერს
            if( isset( $_SERVER[$info] ) ) { // და მოძებნის თუ არსებობს მსგავსი პარამეტრი $_SERVER ობიექტში
                echo $_SERVER[$info] . '<br>'; // და თუ არსებობს დაბეჭდავს.
            }
            else {
              /* თუ არ არსებობს */ echo "NOT FOUND!";
            }
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="GET" action="">
        
    </form>
</body>
</html>