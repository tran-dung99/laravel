<form action="/customers/update" method="post">
    @csrf
    <input type="hidden" value="{{$customer->id}}" name="id">
    <input type="text" value="{{$customer->name}}"  name="name">
    <input type="text" value="{{$customer->email}}"  name="email">
    <input type="text" value="{{$customer->address}}"  name="address">
    <button type="submit">Update</button>
</form>

