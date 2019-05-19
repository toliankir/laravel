@extends('layouts.app')

@section('content')
    <div class="container">
        243
        <table class="table">
            @forelse ($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td><a href="{{route('post.edit', $post->id)}}">Edit</a></td>
                    <td>
                        {!! Form::open(array('url' => route('post.destroy', $post->id),'method' => 'DELETE')) !!}
                        {{ Form::submit('Submit Form')}}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">Данные отстутвуют</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
