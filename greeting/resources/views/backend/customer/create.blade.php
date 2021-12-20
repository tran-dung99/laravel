{{--<form action="/customers" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" placeholder="Nhập tên"  name="name">--}}
{{--    <input type="text" placeholder="Nhập email"  name="email">--}}
{{--    <input type="text" placeholder="Nhập địa chỉ"  name="address">--}}
{{--    <button type="submit">Add</button>--}}
{{--</form>--}}
{{--<?php--}}
{{--if (isset($_REQUEST["message"])) {--}}
{{--    echo $_REQUEST["message"];--}}
{{--}--}}
{{--?>--}}


@extends("backend.Layout.master");
@section('title','Create Customer');
@section('add','');
@section('image','../../assets/img/undraw_profile.svg')
@section('content')
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
           role="button" aria-expanded="true" aria-controls="collapseCardExample">
{{--            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>--}}
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <form action="/customers" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nguyen Van A">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email </label>
                        <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="A@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Ha noi">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a type="button" class="btn btn-primary" href="{{route("customers")}}">Quay lại trang chủ</a>
                </form>
            </div>
        </div>
    </div>
@endsection

