@extends('layouts.app')

@section('page-title', 'List of all users')

@section('content')
    <div class="d-flex mb-4">
        <h4 class="me-auto">
            Create a post
        </h4>

        <a class="btn btn-primary ms-auto" href="{{ route('posts.index') }}">
            <span>Return Posts</span>
        </a>
    </div>

    <div>
        <form action="{{ route('posts.index') }}" method="POST">
            <div class="row mb-3">
                <div class="col-12">
                    <input class="form-control" type="text" name="title" placeholder="Post title">
                    @csrf
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <textarea class="form-control" name="description" placeholder="Post Description">

                    </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12 d-flex">
                    <button class="btn btn-primary ms-auto" type="submit">
                        <span>Post</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
