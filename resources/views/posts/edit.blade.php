@extends('layouts.app')
 
@section('content')
<div class="container">
    <h1>投稿「{{$post->title}}」の編集</h1>
    <form action="{{route('posts.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" class="form-control" value="{{old('title') ?? $post->title}}" placeholder="タイトルを入力してください">
        </div>
        <div class="form-group">
            <label for="body">本文</label>
            <textarea name="body" id="body" class="form-control" rows="5" placeholder="本文を入力してください">{{old('body') ?? $post->body}}</textarea>
        </div>
        <input type="submit" value="決定" class="btn btn-primary">
        <input type="reset" value="キャンセル" class="btn btn-secondary" onclick='window.history.back(-1);'>
    </form>
</div>
@endsection