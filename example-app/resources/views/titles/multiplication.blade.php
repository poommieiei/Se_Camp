@extends('layouts.default')

@section('title', 'Multiplication')

@section()
    <div>
        <h1>ตารางแม่สูตรคูณ</h1>
        <button onclick="alert('hello')">Click me!!!!!!</button>
        <input type="text" id="my_number" value="10">
        <button onclick="myFunction()" class="btn btn-outline-success">submit</button>


        <br>
        <button onclick="myFunction2()">submit F 2</button>
        <h1 id="number"></h1>
        <h1 id="result"></h1>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </div>
@endsection
