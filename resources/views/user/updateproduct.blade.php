@extends('layouts.app')

@section('content')
@if(session()->has('success'))
        <div class="alert alert-success">
        {{session()->get('success')}}

        </div>
        @endif
        @foreach($product as $row)
<form method="post" action="/updateprod" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="hidden" name="id"  value={{$row->idprod}} class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">title</label>
      <input type="text" name="title" class="form-control" value={{$row->title}}  id="formGroupExampleInput2" placeholder="ajouter un title">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">prix</label>
        <input type="text" class="form-control" name="prix"  value={{$row->prix}}
        id="formGroupExampleInput2" placeholder="ajouter un prix">
      </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">desription</label>
      <textarea class="form-control" name="description">{{$row->description}}</textarea>
      </div>
      <button type="/updateproduct" class="btn btn-primary">update</button>

  </form>
@endforeach

@endsection
