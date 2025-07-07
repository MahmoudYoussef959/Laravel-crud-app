@extends('layouts.app')

@section('content')
<div class="mt-4 text-center">
   <a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>
  </div>

  <div class="mt-4" style="width: 80%; margin: 0 auto;">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Title</th>
          <th scope="col">Posted By</th>
          <th scope="col">Created At</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td>{{ $post->title }}</td>
          <td>{{ $post->posted_by }}</td>
          <td>{{ $post->created_at }}</td>
          <td>
            <a href='{{route('posts.show', $post['id'])}}' class="btn btn-info btn-sm">View</a>
            <a href="{{route('posts.edit', $post['id'])}}" class="btn btn-primary btn-sm">Edit</a>
          <form action="{{ route('posts.destroy', $post['id']) }}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
