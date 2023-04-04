@extends('layouts.front')

@section('title')
    Giỏ hàng của tôi
@endsection

@section('content')
<div class = "py-3 mb-4 shadow-sm bg-warning border-top">
    <div class = "container">
        <h6 class = "mb-0">
            <a href="{{ url('/') }}">
                Trang chủ
            </a> /
            <a href="{{ url('cart') }}">
                Giỏ hàng
            </a>
        </h6>
    </div>
</div>

<div class="container my-5">
    <div class="card shadow ">
        @if($cartitems->count() > 0)
            <div class="card-body">
                @php
                    $total = 0;
                @endphp
                @foreach ($cartitems as $item)
                    <div class="row product_data">
                        <div class ="col-md-2 my-auto">
                            <img src=" {{ asset('assets/uploads/products/'.$item->products->image) }}" height="70" width="70px" alt="Image here">
                        </div >
                        <div class="col-md-4 my-auto">
                            <h5>{{ $item->products->name }}</h5 >
                        </div >
                        <div class="col-md-2 my-auto">
                            <h5>{{ $item->products->selling_price }} đ</h5>
                        </div>
                        <div class="col-md-3 my-auto" >
                            <input type="hidden" class ="prod_id" value="{{ $item->prod_id }}">
                            @if($item->products->qty >= $item->prod_qty)
                            <label for="Quantity"> Số lượng </label>
                            <div class="input-group text-center mb-3" style= "width: 130px;" >
                                <button class="input-group-text changeQty decrement-btn"> - </button>
                                <input type="text" name="qty" class="form-control qty-input text-center" value="{{ $item->prod_qty }}">
                                <button class="input-group-text changeQty increment-btn"> + </button>
                            </div >
                                @php
                                    $total += $item->products->selling_price * $item->prod_qty;
                                @endphp
                            @else
                                <h6>Hết hàng</h6>
                            @endif
                        </div >
                        <div class= " col-md-1  my-auto" >
                            <button class="btn btn-danger delete-cart-item"> Xoá </button>
                        </div >
                    </div>

                @endforeach
            </div>
            <div class="card-footer">
                <h6>Thành tiền : {{ $total }} đ</h6>

                <a href="{{ url('checkout') }}" class="btn btn-outline-success float-end">Tính tiền</a>
            </div>
        @else
        <div class="card-body text-center">
            <h2> Giỏ hàng của bạn đang trống </h2>
            <a href="{{ url('/') }}" class="btn btn-outline-primary float-end">Tiếp tục mua sắm</a>
        </div>
        @endif
    </div>
</div>
@endsection

