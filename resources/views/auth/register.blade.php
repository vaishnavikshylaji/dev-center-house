@extends('layouts.master')
@section('content')
    <div class="card m-5">
        <form action="{{ route('register') }}" method="post" id="login-form">
            @csrf
            <div class="m-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           id="name" name="name">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
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
                <label for="password" class="col-sm-2 col-form-label">Interest</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="interests[]"
                               type="checkbox" id="sports-checkbox" value="Sports">
                        <label class="form-check-label"
                               for="sports-checkbox">Sports</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="interests[]"
                               type="checkbox" id="reading-checkbox" value="Reading">
                        <label class="form-check-label"
                               for="reading-checkbox">Reading</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="interests[]"
                               type="checkbox" id="news-checkbox" value="News">
                        <label class="form-check-label"
                               for="news-checkbox">News</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="interests[]"
                               type="checkbox" id="travelling-checkbox"
                               value="Travelling">
                        <label class="form-check-label"
                               for="travelling-checkbox">Travelling</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="interests[]"
                               type="checkbox" id="fooding-checkbox"
                               value="Fooding">
                        <label class="form-check-label"
                               for="fooding-checkbox">Fooding</label>
                    </div>
                </div>
            </div>
            <div class="m-3 row">
                <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                <div class="col-sm-6">
                    <select data-placeholder="Choose roles" id="roles"
                            multiple class="chosen-select" name="roles[]">
                        @foreach($roles as $role)
                        <option value="{{$role->id}}">
                            {{$role->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="m-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Register</button>
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
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                    },
                },
            });

            $("#roles").chosen({
                no_results_text: "Oops, nothing found!"
            })
        });
    </script>
@endpush

