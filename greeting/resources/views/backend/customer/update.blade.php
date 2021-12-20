{{--<form action="/customers/update" method="post">--}}
{{--    @csrf--}}
{{--    <input type="hidden" value="{{$customer->id}}" name="id">--}}
{{--    <input type="text" value="{{$customer->name}}"  name="name">--}}
{{--    <input type="text" value="{{$customer->email}}"  name="email">--}}
{{--    <input type="text" value="{{$customer->address}}"  name="address">--}}
{{--    <button type="submit">Update</button>--}}
{{--</form>--}}

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
                <form action="/customers/update" method="post">
                    @csrf
                    <input type="hidden" value="{{$customer->id}}" name="id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customer->name}}"  placeholder="Nguyen Van A">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email </label>
                        <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="{{$customer->email}}" placeholder="A@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1" value="{{$customer->address}}" placeholder="Ha noi">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a type="button" class="btn btn-primary" href="{{route("customers")}}">Quay lại trang chủ</a>
                </form>
            </div>
        </div>
    </div>
@endsection
