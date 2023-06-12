<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<form action="/them" method="post" class="col-7 m-auto">
    <p> Tiêu đề: <input name="tieude" class="form-control"></p>
    <p> Tóm tắt:
        <textarea name="tomtat" class="form-control"></textarea>
    </p>
    <p> Nội dung: <input name="noidung" class="form-control"></p>
    <p> Hình: <input name="hinh" class="form-control"></p>
    <p><button type="submit" class="bg-warning p-2">Thêm tin</button></p>
    @csrf
</form>
