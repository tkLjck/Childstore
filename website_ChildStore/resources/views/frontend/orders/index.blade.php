
@extends('layouts.front')

@section('title')
    Đơn hàng của tôi
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Đơn hàng của tôi
                            <a href="{{ url('/') }}" class="btn btn-danger text-white float-end">Quay lại trang chủ</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Số theo dõi đơn hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Xem đơn hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $item)
                                    <tr>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>{{ $item->total_price }} đ</td>
                                        <td>{{ $item->status == '0' ? 'Chưa kiểm duyệt' : 'Đã kiểm duyệt' }}</td>
                                        <td>
                                            <a href="{{ url('view-orders/'.$item->id) }}" class="btn btn-primary">Xem</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
