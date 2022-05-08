@extends('layouts.app')

@section('content')
@if(session()->has('success'))
        <div class="alert alert-success">
        {{session()->get('success')}}

        </div>
        @endif
<form method="post" action="/insertproduct" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1" required>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">title</label>
      <input type="text" class="form-control" name="title"  id="title" placeholder="ajouter un title" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">prix</label>
        <input type="text" class="form-control" name="prix"  id="prix" placeholder="ajouter un prix" required>
      </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">desription</label>
      <textarea class="form-control" name="description" id="description" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary"  onclick="myFunction()">add</button>

  </form>

<script>
    function myFunction(event){

let title=document.getElementById('title').value;
let prix=document.getElementById('prix').value;
let description=document.getElementById('description').value;

if(title==""){
    alert("remplir formulaire title");
    event.preventDefault();


} else

if(prix==""){
    alert("remplir formulaire prix");
    event.preventDefault()

}
else

if(description==""){
    alert("remplir formulaire description");
    event.preventDefault()

}
else{
    alert("verifier votre formulaire");
}


    }

</script>
@endsection
