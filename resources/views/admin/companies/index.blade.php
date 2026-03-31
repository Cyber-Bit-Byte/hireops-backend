@extends('admin.layout')

@section('content')

<div class="card shadow p-4">
    <div class="d-flex justify-content-between mb-3">
        <h4>Companies</h4>
        <button class="btn btn-primary">+ Add Company</button>
    </div>

    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
