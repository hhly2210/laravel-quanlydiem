<form method="post" action="/hoc_sinh/{{$hocSinh->id}}">
    @csrf
    @method('PUT')
    <label for="HoTen">Họ tên:</label>
    <input type="text" name="HoTen" value="{{ $hocsinh->ho_ten }}" required>
    <button type="submit">Cập nhật</button>
</form>