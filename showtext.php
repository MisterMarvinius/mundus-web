<html>
    <head>
        <meta http-equiv="content-type" content="text/html; utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Mundus Crassus</title>
        
        <?php
            header('Content-Type: text/html; charset=utf-8');
        ?>
    </head>
            
    <body>
        <form action="showtext.php" method="get">
            <?php
                $text = $_GET["text"];
                $text = str_replace("Ɛ", "{", $text);
                $text = str_replace("Ƒ", "}", $text);
                $text = str_replace("ƒ", "[", $text);
                $text = str_replace("Ɠ", "]", $text);
		$text = str_replace("Ɣ", "(", $text);
		$text = str_replace("ƕ", ")", $text);
		$text = str_replace("Ɩ", "'", $text);
		echo $text;
            ?>          
    </body>
</html>
