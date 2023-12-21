<html>

<body>
    <h1>This is PHP <?php echo 'Hello World'; ?></h1>

    <div>
        <p>1</p>
        <?php
        $var_a = 1;
        print($var_a);
        $var_a = 1;
        $var_a = "1$var_a";
        print_r($var_a);
        echo "<br>";

        echo $var_a + 2;

        
        {
            echo "<h1>my h1</h1>";

            ?>
            <p>2</p>
            <?php
        }

        ?>
        <p>3</p>
    </div>
    <?php $var_a = "Se_Camp" ?>
    
    <?php echo $var_b = 'Hello $var_a' ?>
    <br>
    <?php echo $var_c = "Hello $var_a" ?>

    <?php 
    $var_c = $var_b = 1;
    $var_c = '1';
    if($var_b === $var_c){
        echo '$var_b === $var_c';
    }
    else if($var_b <> $var_c){
        echo '$var_b <> $var_c';
    }
    else{
        echo 'else';
    }
    ?>

    <br>
    <?php echo $var_C = 2; ?>
    <br>
    <?php 
    switch($var_c){
        case 1:
            echo "1";
            break;
        default;
            echo "test";
    }
    $arry = array();
    $arry1 = [];
    $arry2[] = 1;
    $arry2[] = 2;
    $arry2[] = 3;
    $arry2[] = "Hello";
    $arry2['SE'] = "World";
    ?>

    <pre><?php print_r($arry) ; ?></pre>
    <pre><?php print_r($arry1) ; ?></pre>
    <pre><?php print_r($arry2) ; ?></pre>

    <?php for($i = 0 ; $i < count($arry2) ; $i++){ ?>
        <h3><?php echo $arry2[$i]; ?></h3>
    <?php } ?>

    <?php foreach($arry2 as $key => $value){ ?>
        <h3><?php echo $arry2[$key]; ?> 
        : <?php echo $key; ?><
        : <?php echo $value; ?></h3>
    <?php } ?>
        

</body>

</html>