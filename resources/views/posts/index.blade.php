@extends('layouts.app')

@section('content')
    <h1 class="page-title">Blog</h1>
	<div class="card-header"><h2>Posts</h2></div>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card pl-3">
              <br>
                     <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                     <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
				<br>

           
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found.</p>
    @endif    
@endsection