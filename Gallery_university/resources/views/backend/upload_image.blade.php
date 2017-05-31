@extends('layouts.master')

@section('content')

    <div class="form-group">
        <a href="{{route('frontend.gallery.index')}}" class="btn btn-success">Xem tất cả ảnh</a>
    </div>

    <form action="{{route('backend.uploadImage')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group col-md-3" >
            <label for="ten_khoa">Chọn khoa:</label>
            <select name="ten_khoa" class="form-control" id="ten_khoa" required>
                <option value="CNTT">Công nghệ thông tin</option>
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="ten_lop">Chọn lớp:</label>
            <select name="ten_lop" class="form-control" id="ten_lop" required>
                <option value="CA">CA</option>
                <option value="CB">CB</option>
                <option value="CC">CC</option>
                <option value="CD">CD</option>
                <option value="CLC">CLC</option>
            </select>
        </div>
        <input class="form-group col-md-12" type="file" name="list_images[]" multiple required>

        <button type="submit" class="btn btn-success col-md-12" style="width: 20%;margin-left: 15px;" id="submit">Gửi</button>

    </form>
@stop

@section('script')

    <script>
//        $('#submit').click(function() {
//           ten_khoa = $('#ten_khoa').val();
//           ten_lop = $('#ten_khoa').ten_lop();
//        });
    </script>
@stop
