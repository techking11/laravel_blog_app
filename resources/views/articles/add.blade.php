@extends('layouts.app')

@section('content')

<div class="container">
  @if($errors->any())

  <div class="alert alert-warning">
    <ol>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ol>
  </div>

  @endif
  <form action="" method="post">
    @csrf
    <div class="mb-3">
      <label for="">Title</label>
      <input type="text" name="title" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Body</label>
      <textarea name="body" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label for="">Category</label>
      <select name="category_id" class="form-select">
        @foreach($categories as $category)
          <option value="{{$category['id']}}">
          {{ $category['name'] }}
          </option>
        @endforeach
      </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Add Article">
  </form>
</div>

@endsection