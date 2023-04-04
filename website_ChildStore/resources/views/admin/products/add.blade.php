
@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Thêm sản phẩm</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-products') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id">
                            <option selected>Chọn danh mục</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                          </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Mô tả ngắn</label>
                        <textarea name="small_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Mô tả chi tiết</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Giá chính thức</label>
                        <input name="original_price" class="form-control" type="number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Giá bán</label>
                        <input name="selling_price" class="form-control" type="number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Thuế</label>
                        <input name="tax" class="form-control" type="number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Số lượng</label>
                        <input name="qty" class="form-control" type="number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trạng thái</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Phổ biến</label>
                        <input type="checkbox" name="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Tiêu đề</label>
                        <textarea name="meta_title" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Mô tả meta</label>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Từ khoá</label>
                        <textarea name="small_keywords" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
