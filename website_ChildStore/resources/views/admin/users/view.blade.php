
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Xem chi tiết tài khoản
                        <a href="{{ url('users') }}" class="btn btn-primary float-end">Quay lại</a>
                    </h1>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="">Phân loại tài khoản</label>
                            <div class="p-2 border">{{ $users->role_as == '0' ? 'User' : 'Admin'}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Họ</label>
                            <div class="p-2 border">{{ $users->name }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Tên</label>
                            <div class="p-2 border">{{ $users->lname }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Email</label>
                            <div class="p-2 border">{{ $users->email }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">SĐT</label>
                            <div class="p-2 border">{{ $users->phone }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Địa chỉ 1</label>
                            <div class="p-2 border">{{ $users->address1 }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Địa chỉ 2</label>
                            <div class="p-2 border">{{ $users->address2 }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Thành phố</label>
                            <div class="p-2 border">{{ $users->acity }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Quận</label>
                            <div class="p-2 border">{{ $users->state }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Quốc gia</label>
                            <div class="p-2 border">{{ $users->country }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Zip Code</label>
                            <div class="p-2 border">{{ $users->pincode }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
