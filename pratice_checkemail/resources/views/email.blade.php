<form action="/email" method="post">
    @csrf
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" placeholder="Nhập email" name="email"></td>
        </tr>
    </table>
    <button type="submit">Check</button>
</form>
<?php
if (isset($oke)) {
    echo $oke;
}
?>
