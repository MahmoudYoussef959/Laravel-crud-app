@extends('layouts.app')

@section('content')

<form action="{{ route('posts.update', $post['id']) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="input-group mt-3 mb-5">
        <input type="text" name="title" class="form-control" placeholder="Title" style="height: 50px">
    </div>

    <div class="input-group mb-5">
        <input type="text" name="description" class="form-control" placeholder="Description" style="height: 150px">
    </div>

    <div class="input-group mb-5">
        <input type="text" name="posted_by" class="form-control" placeholder="Post Creator" style="height: 50px">
    </div>

    <div class="input-group mb-5">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

@endsection
