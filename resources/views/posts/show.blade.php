@extends('layouts.app')

@section('content')
<div class="container">
		<h2>{{$post->title}}</h2>
		<p>{!! nl2br(htmlspecialchars($post->body)) !!}</p>
		<small>投稿者:{{$post->user->name}} 作成日:{{$post->created_at}}</small>
		<hr>
		<a href="#" class="btn btn-secondary" onclick='window.history.back(-1);'>戻る</a>
		@if (!Auth::guest() && Auth::user()->id == $post->user_id)
			<a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">編集</a>
		@endif
		{{-- 削除ボタン --}}
		<form action="{{route('posts.destroy', $post->id)}}" method="post" class="float-right">
			@csrf
			@method('delete')
			<input type="submit" value="削除" class="btn btn-danger" onclick='return confirm("削除しますか？");'>
		</form>
</div>
@endsection