
@extends('layouts.admin')

@section('title')
    Chi tiết đơn hàng
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>
                            Đơn hàng
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-detail">
                                <h4>Thông tin giao hàng</h4>
                                <hr>
                                <label for="">Họ</label>
                                <div class="border">{{ $orders->fname }}</div>
                                <label for="">Tên</label>
                                <div class="border">{{ $orders->lname }}</div>
                                <label for="">Email</label>
                                <div class="border">{{ $orders->email }}</div>
                                <label for="">SĐT</label>
                                <div class="border">{{ $orders->phone }}</div>
                                <label for="">Địa chỉ giao hàng</label>
                                <div class="border">
                                    {{ $orders->address1 }}
                                    {{ $orders->address2 }}
                                    {{ $orders->city }}
                                    {{ $orders->state }}
                                    {{ $orders->country }}
                                </div>
                                <label for="">Zip code</label>
                                <div class="border p-2">{{ $orders->pincode }}</div>
                            </div>
                            <div class="col-md-6">
                                <h4>Chi tiết đơn hàng</h4>
                                <hr>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>SL</th>
                                            <th>Giá</th>
                                            <th>Hình ảnh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders->orderitems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ $item->price }} đ</td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px" alt=""></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Thành tiền: <span class="float-end">{{ $orders->total_price }} đ</span></h4>
                                <div class="mt-5 px-2">
                                    <label for="">Trạng thái đơn hàng</label>
                                    <form action="{{ url('update-order/'.$orders->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select class="form-select" name="order_status">
                                            <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">Đang kiểm duyệt</option>
                                            <option {{ $orders->status == '1' ? 'selected' : '' }} value="1">Đã kiểm duyệt</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary float-end mt-3">Cập nhật</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
