@extends('admin.layout')

@section('content')
    <h1>View Posts</h1>
    @foreach ($posts as $post)
        <div>
            {{ $post->title }}
            <a href="{{ route('admin.posts.edit-post', $post) }}">edit</a>
        </div>
    @endforeach
    {{ $posts->links('vendor/pagination/simple-default') }}
@endsection
