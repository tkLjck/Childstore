
@extends('layouts.front')

@section('title')
    Thanh toán
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Thông tin giao hàng</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="">Họ</label>
                                    <input type="text" class="form-control" {{ Auth::user()->name }} name="fname" placeholder="Nhập họ">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tên</label>
                                    <input type="text" class="form-control" {{ Auth::user()->lname }} name="lname" placeholder="Nhập tên">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" {{ Auth::user()->email }} name="email" placeholder="Nhập Email">
                                </div>
                                <div class="col-md-6">
                                    <label for="">SĐT</label>
                                    <input type="text" class="form-control" {{ Auth::user()->phone }} name="phone" placeholder="Nhập SĐT">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Địa chỉ 1</label>
                                    <input type="text" class="form-control" {{ Auth::user()->address1 }} name="address1" placeholder="Nhập địa chỉ 1">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Địa chỉ 2</label>
                                    <input type="text" class="form-control" {{ Auth::user()->address2 }} name="address2" placeholder="Nhập địa chỉ 2">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Thành phố</label>
                                    <input type="text" class="form-control" {{ Auth::user()->city }} name="city" placeholder="Nhập thành phố">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Quận</label>
                                    <input type="text" class="form-control" {{ Auth::user()->state }} name="state" placeholder="Nhập quận">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Quốc gia</label>
                                    <input type="text" class="form-control" {{ Auth::user()->country }} name="country" placeholder="Nhập quốc gia ">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Pin code</label>
                                    <input type="text" class="form-control" {{ Auth::user()->pincode }} name="pincode" placeholder="Nhập pin code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Chi tiết hoá đơn</h6>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>SL</th>
                                        <th>Giá tiền</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartitems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->prod_qty }}</td>
                                            <td>{{ $item->products->selling_price }} đ</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <button type="submit" class="btn btn-primary float-end w-100">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
