@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

    <div class="container mt-5">
        <h2>Edit User</h2>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password (leave blank to keep current password)</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
            </div>
            <div class="mb-3">
    <label for="state" class="form-label">State</label>
    <select class="form-select" id="state" name="state" required>
        <option value="active" {{ $user->state == 'active' ? 'selected' : '' }}>Active</option>
        <option value="pending" {{ $user->state == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="suspended" {{ $user->state == 'suspended' ? 'selected' : '' }}>Suspended</option>
    </select>
</div>

<div class="mb-3">
    <label for="start_date" class="form-label">Start Date</label>
    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ \Carbon\Carbon::parse($user->start_date)->format('Y-m-d') }}" required>
</div>


            <div class="mb-3">
                <label for="duration" class="form-label">Duretion</label>
                <input type="text" class="form-control" id="duration" name="duration" value="{{ $user->duration }}" required>
            </div>
        
            <div class="mb-3">
                <label for="openapiKey" class="form-label">openapiKey</label>
                <input type="text" class="form-control @error('openapiKey') is-invalid @enderror" id="openapiKey" name="openapiKey" value="{{ $user->openapiKey }}" required>
                @error('openapiKey')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-5">Update User</button>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection