@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin {{ $userId }}</h1>
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
                    <td><a href={{route('dashboard.users', $user->id)}}>{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$users->links()}}

        @if($findUser)
            <b>{{ $findUser->name }}</b>
        @elseif ($userId && !$findUser)
            <b>User with id #{{ $userId  }} not found.</b>
        @endif
        {!! Form::open(array('url' => route('dashboard.user_update'),'method' => 'POST')) !!}
        {{ Form::hidden('user_id', $findUser->id) }}
        {{ Form::text("user_name", $findUser->name, [
                        "class" => "form-group user-email",
                        "placeholder" => "Username"])}}
        {{ Form::text("user_email", $findUser->email, [
                "class" => "form-group user-email",
                "placeholder" => "User email"])}}
        {{ Form::select("user_type", ['user'=>'user', 'admin'=>'admin'], $findUser->type, [
                "class" => "form-group",
                "placeholder" => "User type"])}}
        {{ Form::checkbox("item","active" ,true, [
                "class" => "form-group"])}}
        {{ Form::submit('Submit Form')}}
        {!! Form::close() !!}
    </div>
@endsection
