@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <a href="/posts/create" class="btn btn-primary">Create Sample Post</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->created_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No posts available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
