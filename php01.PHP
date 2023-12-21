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
    <?php $var_a = "Se_Camp" ?>
    <br>
    <?php echo $var_b = 'Hello $var_a' ?>
    <?php echo $var_c = "Hello $var_a" ?>

    $varc += $var_b = 1;
    <?php if(){

    }
    else if(){

    }
    else{

    }
</body>



</html>