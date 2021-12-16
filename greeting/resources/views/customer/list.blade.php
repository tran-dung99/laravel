<a href="{{route("customers.create")}}">create new customer</a>
<table border="1px solid green">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    <?php if(isset($customers)){
    foreach ($customers as $customer)  :?>
    <tr>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->address}}</td>
        <td><a href="{{route("customers.delete",$customer->id)}}">Delete</a></td>
        <td><a href="{{route("customers.detail",$customer->id)}}">Detail</a></td>
        <td><a href="{{route("customers.update",$customer->id)}}">Update</a></td>
    </tr>
    <?php endforeach;
    } ?>
    </tbody>
</table>
