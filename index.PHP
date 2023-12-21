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

</body>



</html>