<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Posts</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
        <ul class="list-group">
            @foreach ($posts as $post)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <div>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>@extends('layouts.app')
