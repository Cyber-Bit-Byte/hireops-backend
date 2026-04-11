@extends('admin.layout')

@section('content')

<div class="glass p-4">
    <h4 class="mb-4">➕ Add Company</h4>

    {{-- Validation Error Show --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.companies.store') }}" method="POST">
        @csrf

        {{-- Name --}}
        <div class="mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter company name" required>
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email">
        </div>

        {{-- Phone --}}
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
        </div>

        {{-- Buttons --}}
        <div class="d-flex justify-content-between">
            <a href="{{ route('admin.companies.index') }}" class="btn btn-secondary">⬅ Back</a>

            <button type="submit" class="btn btn-success">
                💾 Save Company
            </button>
        </div>

    </form>
</div>

@endsection
