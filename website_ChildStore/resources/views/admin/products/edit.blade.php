
@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Sửa sản phẩm</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('update-products/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select">
                            <option value="">{{ $products->category->name }}</option>
                          </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" value="{{ $products->slug }}" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Mô tả ngắn</label>
                        <textarea name="small_description" rows="3" class="form-control">{{ $products->small_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Mô tả chi tiết</label>
                        <textarea name="description" rows="3" class="form-control">{{ $products->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Giá gốc</label>
                        <input name="original_price" value="{{ $products->original_price }}" class="form-control" type="number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Giá bán</label>
                        <input name="selling_price" value="{{ $products->selling_price }}" class="form-control" type="number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Thuế</label>
                        <input name="tax" value="{{ $products->tax }}" class="form-control" type="number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Số lượng</label>
                        <input name="qty" value="{{ $products->qty }}" class="form-control" type="number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trạng thái</label>
                        <input type="checkbox" {{ $products->status == "1" ? 'checked' : '' }} name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Phổ biến</label>
                        <input type="checkbox" {{ $products->trending == "1" ? 'checked' : '' }} name="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Tiêu đề</label>
                        <textarea name="meta_title" rows="3" class="form-control">{{ $products->meta_title }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Mô tả meta</label>
                        <textarea name="meta_description" rows="3" class="form-control">{{ $products->meta_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Từ khoá</label>
                        <textarea name="small_keywords" rows="3" class="form-control">{{ $products->small_keywords }}</textarea>
                    </div>
                    @if ($products->image)
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="Products image">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
