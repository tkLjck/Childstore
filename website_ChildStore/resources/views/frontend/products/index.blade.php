
@extends('layouts.front')

@section('title')
    {{ $category->name }}
@endsection

@section('content')
<div class = "py-3 mb-4 shadow-sm bg-warning border-top">
    <div class = "container" >
        <h6 class = "mb-8" > Danh mục / {{ $category->name }} </h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $category->name }}</h2>
                @foreach ($products as $prod)
                    <div class="col-md-3 mb-3" style="margin: 10px 0px;">
                        <div class="card">
                            <a href="{{ url('category/'.$category->slug.'/'.$prod->slug) }}">
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

@endsection
