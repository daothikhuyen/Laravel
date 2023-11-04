@extends('admin.main')

@section('content')

<form action="" method="post">
    <div class="card-body">
        @include('admin.alert')

        <div class="form-group">
            <label for="exampleInputEmail1">Tên Dạnh Muc</label>
            <input type="text" name="ten_danh_muc" class="form-control" id="menu" placeholder="Nhập Tên Danh Mục">
        </div>

        <div class="form-group">
            <label for="menu">Dạnh Muc</label>
            <select class="form-control" name="parent_id">
                <option value="0">Danh Mục Cha </option>

            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Mô tả</label>
            <textarea name="description" id="" class="form-control" ></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Mô tả chi tiết</label>
            <textarea name="content" id="" class="form-control" ></textarea>
        </div>


        <div class="form-group">
            <label>Kích Hoạt</label>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Có</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" >
                    <label class="form-check-label">Không</label>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
    </div>

    @csrf

  </form>
@endsection

@section('footer')

    <script>
        CKEDITOR.replace( 'content' );
    </script>

@endsection