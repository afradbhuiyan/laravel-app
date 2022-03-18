@extends('layouts.app')

@section('page-title', 'List of all users')

@section('content')
    <div class="d-flex mb-4">
        <h4 class="me-auto">
            Posts
        </h4>

        <a class="btn btn-primary ms-auto" href="{{ route('posts.create') }}">
            <span>Create a Post</span>
        </a>
    </div>

    <div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as  $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>

                        <td>
                            <div class="d-flex">
                                <a class="btn btn-info me-1" href="{{ route('posts.edit', $post->id)}}">Edit</a>

                                <form class="ms-1" action="{{ route('posts.destroy', $post->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
