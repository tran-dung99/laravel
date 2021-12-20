{{--<a href="{{route("customers.create")}}">create new customer</a>--}}
{{--<table border="1px solid green">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>Name</th>--}}
{{--        <th>Email</th>--}}
{{--        <th>Address</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    <?php if(isset($customers)){--}}
{{--    foreach ($customers as $customer)  :?>--}}
{{--    <tr>--}}
{{--        <td>{{$customer->name}}</td>--}}
{{--        <td>{{$customer->email}}</td>--}}
{{--        <td>{{$customer->address}}</td>--}}
{{--        <td><a href="{{route("customers.delete",$customer->id)}}">Delete</a></td>--}}
{{--        <td><a href="{{route("customers.detail",$customer->id)}}">Detail</a></td>--}}
{{--        <td><a href="{{route("customers.update",$customer->id)}}">Update</a></td>--}}
{{--    </tr>--}}
{{--    <?php endforeach;--}}
{{--    } ?>--}}
{{--    </tbody>--}}
{{--</table>--}}

@extends("backend.Layout.master");
@section('title','Customer');
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách khách hàng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>address</th>
                        <th colspan="3">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($customers as $customer):?>
                        <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->address}}</td>
                            <td><a href="{{route("customers.delete",$customer->id)}}">Delete</a></td>
                            <td><a href="{{route("customers.detail",$customer->id)}}">Detail</a></td>
                            <td><a href="{{route("customers.update",$customer->id)}}">Update</a></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
