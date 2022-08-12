@extends('layouts.master')
@section('content')
    <div class="card m-5">
        <form action="{{ route('login') }}" method="post" id="login-form">
            @csrf
            <div class="m-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text"
                           class="form-control @error('email') is-invalid @enderror"
                           id="email" name="email">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="m-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control
                        @error('password') is-invalid @enderror"
                           id="password" name="password">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="m-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('js')
    <script>
        $(function () {
            $('#login-form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                    }
                }
            });
        });
    </script>
@endpush

