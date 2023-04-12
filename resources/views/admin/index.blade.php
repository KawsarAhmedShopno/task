@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="page-header text-center">Student List</h1>
<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <h2>Students Table
            <button type="button" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Student</button>
        </h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <table class="table table-bordered table-responsive table-striped">
            <thead>
                <th>Name</th>
                <th>email</th>
                <th>password</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>
                            <a href="#edit{{$user->id}}" data-bs-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a> 
                            <a href="#delete{{$user->id}}" data-bs-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
                            @include('admin.action')
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
    </div>
</div>
@endsection
