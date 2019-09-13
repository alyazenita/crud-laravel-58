
@extends('template.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambah Catatan
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
      <form method="post" action="{{ route('catatan.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="desc">Description :</label>
              <input type="text" class="form-control" name="desc"/>
          </div>
          <div class="form-group">
              <label for="category">Category :</label>
              <input type="text" class="form-control" name="category"/>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>
</div>
@endsection