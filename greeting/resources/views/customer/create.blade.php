<form action="/customers" method="post">
    @csrf
    <input type="text" placeholder="Nhập tên"  name="name">
    <input type="text" placeholder="Nhập email"  name="email">
    <input type="text" placeholder="Nhập địa chỉ"  name="address">
    <button type="submit">Add</button>
</form>
<?php
if (isset($_REQUEST["message"])) {
    echo $_REQUEST["message"];
}
?>
<a href="{{route("customers")}}">Quay lại trang chủ</a>
