@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(array('url' => route('post.update', $id),'method' => 'PUT')) !!}
        @include('post.form')
        {!! Form::close() !!}
    </div>
@endsection
