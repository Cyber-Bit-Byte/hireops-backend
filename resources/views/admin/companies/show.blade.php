@extends('admin.layout')

@section('content')

<div class="glass p-4">
    <h4 class="mb-4">🏢 Company Details</h4>

    <div class="mb-3">
        <strong>Name:</strong>
        <p>{{ $company->name }}</p>
    </div>

    <div class="mb-3">
        <strong>Email:</strong>
        <p>{{ $company->email ?? 'N/A' }}</p>
    </div>

    <div class="mb-3">
        <strong>Phone:</strong>
        <p>{{ $company->phone ?? 'N/A' }}</p>
    </div>

    <div class="mb-3">
        <strong>Created At:</strong>
        <p>{{ $company->created_at }}</p>
    </div>

    <a href="{{ route('admin.companies.index') }}" class="btn btn-secondary">
        ⬅ Back
    </a>
</div>

@endsection
