@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin {{ $usersCount }}</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <td><a href={{route('admin.dashboard.user', $user->id)}}>{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
@endsection
