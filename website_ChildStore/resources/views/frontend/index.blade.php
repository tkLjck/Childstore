
@extends('layouts.front')

@section('title')
    Chào mừng đến với Cửa hàng quần áo trẻ em - Child Store
@endsection

@section('content')
    @include('layouts.inc.slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Sản phẩm mới</h2>
                    @foreach ($featured_products as $prod)
                        <div class="col-md-3" style="margin: 10px 0px;">
                            <div class="card">
                                <a href="{{ url('category/'.$prod->category->name.'/'.$prod->slug) }}">
                                    <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" class="w-100" alt="Product image">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                            <br/>
                                        <span class="float-start">Giá: {{ $prod->selling_price }} đ</span>
                                            <br/>
                                        <span>
                                            {{ Str::limit($prod->description, 30) }}
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Danh mục hot</h2>
                    @foreach ($trending_category as $tcate)
                        <div class="col-md-3" style="margin: 10px 0px;">
                            <a href="{{ url('view-category/'.$tcate->slug) }}">
                                <div class="card">
                                    <img  src="{{ asset('assets/uploads/category/'.$tcate->image) }}"   alt="Product image">
                                    <div class="card-body">
                                        <h5>{{ $tcate->name }}</h5>
                                        <p>
                                            {{ $tcate->description }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
