@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit {{$user->name}}</h1>
        <form action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" id="email" value="{{ $user->email }}" disabled >
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="super_admin" name="roles[]" id="super_admin" {{ $user->hasRole('super_admin') ? 'checked' : '' }}>
                <label class="form-check-label" for="super_admin">
                  Super_admin
                </label>
              </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="user" id="user" name="roles[]" {{ $user->hasRole('user') ? 'checked' : '' }}>
                <label class="form-check-label" for="user">
                    User
                </label>
            </div>
            <input class="btn btn-success mt-2" type="submit"></input>
        </form>
    </div>
@endsection
