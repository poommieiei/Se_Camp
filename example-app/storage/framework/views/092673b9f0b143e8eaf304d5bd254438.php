<html>


<head>
    <title>Meawwwwwww!!!</title>
    <meta charset="utf-8" />

    <style>

        div {
            text-align: center;

        }
        div div{
            overflow: auto;
            margin: 0 auto;
            width: 20%;
            height: 45%;
            font-size: 22px;
            border:4px solid black;
            padding:5px;
            background-color:#ffdb58;
        }
    </style>
</head>



<body style="background: #409fb4">

    <div>
        <h1>ตารางแม่สูตรคูณ</h1>

            <form method="POST" action="/my-multiple">
                <?php echo csrf_field(); ?>
                <input type="number" name="myinput" />
                <br><br>
                <button type="submit">Submit</button>
            </form>
            <?php
            if(isset($myinput)){
                $num = $myinput;
            }
            else{
                $num = 0;
            }
            echo "<h1> คูณแม่ $num </h1>";?>

            <div>
                <?php


                    if ($num != 0) {
                        for($i = 1 ; $i <= 24 ; $i++){
                            $temp = $num * $i;
                            echo " $num * $i = $temp<br>";
                        }
                    }else if ($num == 0) {
                        echo " 0 times anything is 0.";
                    }
                ?>
            </div>

    </div>
</body>
</html>
<?php /**PATH D:\XAMPP\htdocs\Se_Camp\example-app\resources\views/Myfolder/Multiplication_Table.blade.php ENDPATH**/ ?>