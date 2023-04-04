
@extends('layouts.admin')

@section('title')
    Đơn hàng
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Lịch sử đơn hàng
                        <a href="{{ 'orders' }}" class="btn btn-warning float-end">Đơn hàng mới</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Số HD</th>
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
                                    <td>{{ $item->status == '0' ? 'pending' : 'completed' }}</td>
                                    <td>
                                        <a href="{{ url('admin/view-orders/'.$item->id) }}" class="btn btn-primary">Xem</a>
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
