@extends('layouts.app')

@section('content')
    <div class="container">
        @if($foundUser)
            <h1>{{ $foundUser->name }}</h1>
            {!! Form::open(array('url' => '','method' => 'POST')) !!}
            {{ Form::hidden('user_id', $foundUser->id) }}
            <p>
            {{ Form::text("user_name", $foundUser->name, [
                            "class" => "form-group user-email",
                            "placeholder" => "Username"])}}
            </p><p>
            {{ Form::text("user_email", $foundUser->email, [
                    "class" => "form-group user-email",
                    "placeholder" => "User email"])}}
            </p><p>
            {{ Form::select("user_type", ['user'=>'user', 'admin'=>'admin'], $foundUser->type, [
                    "class" => "form-group",
                    "placeholder" => "User type"])}}
            </p><p>
            {{ Form::checkbox("item","active" ,true, [
                    "class" => "form-group"])}}
            </p><p>
            {{ Form::submit('Submit Form')}}
            </p>
            {!! Form::close() !!}
            <a href="{{Route('admin.dashboard.index')}}">To users list</a>
        @elseif ($userId && !$foundUser)
            <h1>User with id #{{ $userId  }} not found.</h1>
        @endif
    </div>
@endsection
