
@extends('template.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
<a href="catatan/create" class="btn btn-primary"><i class="fa fa-add"></i>Tambah</a> <br><br>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>No</td>
          <td>Title</td>
          <td>Description</td>
          <td colspan="3">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($catatans as $no => $catatan)
        <tr>
            <td>{{++$no}}</td>
            <td>{{$catatan->title}}</td>
            <td>{{$catatan->desc}}</td>
            <td><a href="{{ route('catatan.show',$catatan->id)}}" class="btn btn-primary">Detail</a></td>
            <td><a href="{{ route('catatan.edit',$catatan->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('catatan.destroy', $catatan->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection