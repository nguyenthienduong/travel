<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<form action="/capnhat/{{ $tin->id }}" method="post" class="col-7 m-auto">
    <p> Tiêu đề: <input value="{{ $tin->tieude }}" name="tieude" class="form-control"></p>
    <p> Tóm tắt:
        <textarea rows="5" name="tomtat" class="form-control">{{ $tin->tomtat }}</textarea>
    </p>
    <p> Nội dung: <input value="{{ $tin->noidung }}" name="noidung" class="form-control"></p>
    <p> Hình: <input name="hinh" class="form-control"></p>
    <p><button type="submit" class="bg-warning p-2">Cập Nhật</button></p>
    @csrf
</form>
