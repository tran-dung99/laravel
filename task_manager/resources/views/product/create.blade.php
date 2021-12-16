<form action="/products"method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên sản phẩm">
    <input type="text" name="origin" placeholder="Nhập xuất xứ sản phẩm">
    <input type="number" name="price" placeholder="Nhập giá sản phẩm">
    <input type="text" name="function" placeholder="Nhập chức năng sản phẩm">
    <input type="text" name="detail" placeholder="Nhập mô tả sản phẩm">
    <button type="submit">Add</button>
</form>
