@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h5 class="m-0">กรอกข้อมูล</h5>
                        </div>
                        <br>
                        <form action="#">
                            <table>
                                <tr>
                                    <td>ชื่อ</td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td>นามสกุล</td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td>วัน/เดือน/ปี</td>
                                    <td><input type="date" /></td>
                                </tr>
                                <tr>
                                    <td>อายุ</td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td>เพศ</td>
                                    <td>
                                        <input id="radio_a"
                                            type="radio"
                                            name="same_radio"/>
                                        <label for="radio_a">ชาย</label>
                                        <input id="radio_b"
                                            type="radio"
                                            name="same_radio"/>
                                        <label for="radio_b">หญิง</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        รูป
                                    </td>
                                    <td><input type="file"></td>
                                </tr>
                                <tr>
                                    <td>ที่อยู่</td>
                                    <td><textarea rows="4"
                                    placeholder=""></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        สีที่ชอบ
                                    </td>
                                    <td>
                                        <select>
                                            <option
                                            value=""
                                            disabled
                                            selected>สีแดง</option>
                                            <option>สีเหลือง</option>
                                            <option>สีน้ำเงิน</option>
                                            <option>สีเขียว</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>เพศ</td>
                                    <td>
                                        <input id="radio_a"
                                            type="radio"
                                            name="same_radio"/>
                                        <label for="radio_a">ลูกทุ่ง</label>
                                        <input id="radio_b"
                                            type="radio"
                                            name="same_radio"/>
                                        <label for="radio_b">หมอลำ</label>
                                        <input id="radio_c"
                                            type="radio"
                                            name="same_radio"/>
                                        <label for="radio_c">อื่นๆ</label>
                                    </td>
                                </tr>
                                <td>
                                    <input type="checkbox"
                                        name="my_checkbox">ยินยอมให้เก็บข้อมูล
                                    <br>
                                </td>
                                <tr>
                                    <td>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </td>
                                    <td>

                                        <button type="submit" href="#" class="btn btn-primary">Submit</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
