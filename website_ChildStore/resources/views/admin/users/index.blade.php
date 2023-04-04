
@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Tài khoản đăng kí</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>SĐT</th>
                        <th>Xem chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td style="padding: 7px 26px">{{ $item->id }}</td>
                            <td style="padding: 7px 26px">{{ $item->name.' '.$item->lname  }}</td>
                            <td style="padding: 7px 42px">{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>
                                <a href="{{ url('view-users',$item->id) }}" class="btn btn-primary">Xem</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
