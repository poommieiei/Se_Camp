<html>
    <head>
        <title>Page Title</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" 
            href="MyStyle01.css" />
           
    </head>
<body>
    
    <h1>This is PHP <?php echo 'สูตรคูณ'; ?></h1>

    <div>
        <?php
        $var_a = 12;
        for($i = 1 ; $i <= 24 ; $i++){
            $temp = $var_a * $i;
            echo " $var_a * $i = $temp<br>";
        }
        ?>
    </div>

</body>



</html>