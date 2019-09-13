@extends('template.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Detail
  </div>
  <div class="card-body">
          <div class="form-group">
              <label for="name">Title:</label>
              {{$catatan->title}}
          </div>
          <div class="form-group">
              <label for="price">Description :</label>
              {{$catatan->desc}}
          </div>
          <div class="form-group">
              <label for="quantity">Category :</label>
              {{$catatan->category}}
          </div>
  </div>
</div>
@endsection