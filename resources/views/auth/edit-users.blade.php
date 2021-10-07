@extends('layouts.app')
@section('title', 'CRUD Functionalities')

@section('content')
    <div class="mt-5">
        <div class="d-flex align-items-center justify-content-center">
            <div class="card col-lg-3 shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <a href="{{ url('user') }}">Back</a>
                        <p>Edit User</p>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('user/'.$user->id) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
                        </div>
                        <div class="d-grid gap-2 col-12 mx-auto">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection