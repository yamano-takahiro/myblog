@extends('layouts.app')

@section('content')
<div class="container">
	@foreach ($posts as $post)
	<div class="card">
		<div class="row">
			<div class="col-md-12">
				<h2><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2>
				<small>投稿者:{{$post->user->name}} 作成日:{{$post->created_at}}</small>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection