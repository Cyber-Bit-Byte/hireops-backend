@extends('admin.layout')

@section('content')

<div class="row g-4">

    <div class="col-md-4">
        <div class="card shadow p-4 text-center">
            <i class="fas fa-building fa-2x mb-2 text-primary"></i>
            <h5>Companies</h5>
            <h2>{{ $companies }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow p-4 text-center">
            <i class="fas fa-users fa-2x mb-2 text-success"></i>
            <h5>Employees</h5>
            <h2>{{ $employees }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow p-4 text-center">
            <i class="fas fa-tasks fa-2x mb-2 text-danger"></i>
            <h5>Tasks</h5>
            <h2>{{ $tasks }}</h2>
        </div>
    </div>

</div>

@endsection
