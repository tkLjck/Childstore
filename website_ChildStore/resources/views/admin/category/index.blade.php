
@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Danh sách các danh mục</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Hình ảnh</th>
                        <th>Sửa / Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td style="padding: 7px 26px">{{ $item->id }}</td>
                            <td style="padding: 7px 42px">{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="w-25" alt="Image here">
                            </td>
                            <td>
                                <a href="{{ url('edit-category',$item->id) }}" class="btn btn-primary">Sửa</a>
                                <a href="{{ url('delete-category',$item->id) }}" class="btn btn-danger">Xoá</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
