<!DOCTYPE html>
<html>

<head>
    <title>javascript101</title>
</head>

<body>
    <h1 id="myh1">
        <h1>Prepend</h1><h1>javascript</h1><h1>Append</h1>
    </h1>
    <h1>After</h1>
    <button onclick="alert('hello')">Click me!!!!!!</button>
    <input type="text" id="my_number" value="10">
    <button onclick="myFunction()">submit</button>
    <br>
    <button onclick="myFunction2()">submit F 2</button>
    <table id="my_table">
        <thead>
            <tr>
                <td>#</td>
                <td>result</td>
            </tr>
        </thead>
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log("Hello - doc")
            console.log($('#myh1').text());
            console.log($('#my_number').val());
            $('#myh1').text("javascript101")
            $('#my_number').val(100)

        });

        function myFunction2() {
            let my_number = parseInt($('#my_number').val());
            let my_code_tr = '';
            for (let i = 0; i < my_number; i++) {
                my_code_tr += `<tr><td>${i}</td><td>test</td></tr>`;
            }
            $('#my_tbody').html(my_code_tr);
        }

        function myFunction() {
            let my_number = parseInt($('#my_number').val());
            for (let i = 0; i < my_number; i++) {
                $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`);
            }
            console.log(document.getElementById('my_number').value);
            console.log("Click sub");
            setTimeout(function() {
                $('.my_gen_number').each(function(index, val) {
                    $(val).remove();
                })
            }, 2000);

        }

        console.log("hello");
        let myval;
        myval = '10';
        myval2 = '2';
        console.log(myval, myval2);
        let myval3 = parseInt(myval) + parseInt(myval2);
        console.log(myval3);
        myval3 = parseInt(myval) - parseInt(myval2);
        console.log(myval3);
        myval3 = parseInt(myval) * parseInt(myval2);
        console.log(myval3);
        myval3 = parseInt(myval) / parseInt(myval2);
        console.log(myval3);

        let myval4 = [1, 2, 3, 4];

        console.log(myval4);

        for (let i = 0; i < myval4.length; i++) {
            console.log(myval4[i]);
        }
        myval4.forEach(function(value, index) {
            console.log("in forEach", value);
        });
    </script>
</body>

</html>
