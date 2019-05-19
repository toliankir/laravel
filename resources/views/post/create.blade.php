@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(array('url' => route('post.store'),'method' => 'POST')) !!}
        @include('post.form')
        {!! Form::close() !!}
    </div>
@endsection
