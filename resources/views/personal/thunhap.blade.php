@extends('layouts.app')

@section('content')

@foreach($moneys as $money)
<div class="general-radius-sm shadow p-1 mb-3 row align-items-center ">
    <div class="col-2">
        <a href="/ca-nhan" class="btn btn-block btn-outline-dark">
            <i class="fas fa-angle-double-left"></i>
        </a>
    </div>
    <div class="col-10">
        <center>
            <h1>Thống kê thu nhập</h1>
        </center>
    </div>
</div>
<div class="general-radius-sm shadow p-1 mb-3 row align-items-center justify-content-center">
    <div class="col-3 general-radius-sm shadow m-4 p-3">
        <center>
            <h3>Số Dư</h3>
            <h2 style="color:orangered">{{number_format($money->balance)}}đ</h2>
        </center>
    </div>
    <div class="col-3 general-radius-sm shadow m-4 p-3">
        <center>
            <h3>Tổng Nạp</h3>
            <h2 style="color:orangered">{{number_format($money->deposit)}}đ</h2>
        </center>
    </div>
    <div class="col-3 general-radius-sm shadow m-4 p-3">
        <center>
            <h3>Lợi Nhuận</h3>
            <h2 style="color:orangered">{{number_format($money->deposit + ($money->refferal)*2 - $money->balance - $money->pending - $money->withdraw)}}đ</h2>
        </center>
    </div>  
    <div class="col-3 general-radius-sm shadow m-4 p-3">
        <center>
            <h3>Giới Thiệu</h3>
            <h2 style="color:orangered">{{number_format($money->refferal)}}đ</h2>
        </center>
    </div>
    <div class="col-3 general-radius-sm shadow m-4 p-3">
        <center>
            <h3>Đang rút</h3>
            <h2 style="color:red">{{number_format($money->pending)}}đ</h2>
        </center>
    </div>
    <div class="col-3 general-radius-sm shadow m-4 p-3">
        <center>
            <h3>Đã rút</h3>
            <h2 style="color:green">{{number_format($money->withdraw)}}đ</h2>
        </center>
    </div>
</div>
@endforeach

@endsection