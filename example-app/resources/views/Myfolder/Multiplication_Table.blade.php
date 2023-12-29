<html>


<head>
    <title>Gay</title>
    <meta charset="utf-8" />

</head>



<body style="background: #fddbfe">

    <h1>ตารางแม่สูตรคูณ</h1>

        <form method="POST" action="/my-route">
            @csrf
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
            echo "<h1> คูณแม่ $num </h1><br>";

                if ($num != 0) {
                    for($i = 1 ; $i <= 24 ; $i++){
                        $temp = $num * $i;
                        echo " $num * $i = $temp<br>";
                    }
                }else if ($num == 0) {
                    echo " 0 times anything is 0.";
                }


            ?>


</body>
</html>
