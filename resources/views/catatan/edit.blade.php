@extends('template.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Menu
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('catatan.update', $catatan->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Title:</label>
              <input type="text" class="form-control" name="title" value="{{$catatan->title}}"/>
          </div>
          <div class="form-group">
              <label for="price">Description :</label>
              <input type="text" class="form-control" name="desc" value="{{$catatan->desc}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Category :</label>
              <input type="text" class="form-control" name="category" value="{{$catatan->category}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Catatan</button>
      </form>
  </div>
</div>
@endsection