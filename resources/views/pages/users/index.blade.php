@extends('layouts.master')
@section('content')
        <table class="table table-bordered mt-3">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Interests</th>
                <th scope="col">Roles</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td> {{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(count($user->userInterests)>0)
                        @foreach($user->userInterests as $interest)
                            {{$interest->interest}} @if(!$loop->last),@endif
                        @endforeach
                    @endif
                </td>
                <td>
                    @if(count($user->roles)>0)
                        @foreach($user->roles as $role)
                            {{$role->name}}
                            @if(!$loop->last),@endif
                        @endforeach
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

@endsection
