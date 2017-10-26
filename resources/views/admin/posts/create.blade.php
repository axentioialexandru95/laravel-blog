@extends('layouts.app')
@section('content')

  @if(count($errors) > 0)
  <ul class="list-group">
    @foreach($errors->all() as $error)
      <li class="list-group-item text-danger">
        {{ $error }}
      </li>
    @endforeach
  </ul>
  @endif

  <div class="panel panel-default">
    <div class="panel-heading">
      Create a new post
    </div>
    <div class="panel-body">
      <form class="" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" value="">
        </div>
        <div class="form-group">
          <label for="featured">Featured image</label>
          <input type="file" name="featured" class="form-control" value="">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="content" class="form-control" rows="5" cols="5"></textarea>
        </div>
        <div class="form-group">
          <div class="text-center">
            <button type="submit" class="btn btn-success" name="button">Store Post</button>

          </div>
        </div>
      </form>
    </div>
  </div>

@stop
