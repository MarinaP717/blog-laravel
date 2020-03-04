@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <br>
    <div>{!!$post->body!!}</div>    
    
    @auth
    @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy' , $post->id], 'method' => 'POST', 'class' =>'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
@endauth
<hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>   
    <hr>
<hr>
    <h4>Comments</h4>
  
    @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])

    <hr>

    @auth
        <h4>Add comment</h4>
        <form method="post" action="{{ route('comments.store'   ) }}">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="body"></textarea>
                <input type="hidden" name="post_id" value="{{ $post->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Add Comment" />
            </div>
        </form>
    @endauth

    
   
@endsection
