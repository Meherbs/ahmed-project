@extends('layouts.app')

@section('content')
@if(session()->has('success'))
        <div class="alert alert-success">
        {{session()->get('success')}}

        </div>
        @endif
<a href="/addproduct" name="submit" class="btn btn-primary">add product</a>
<div class="container">
    <div class="col-lg-6">

<form  method="post"  action="{{url('/search')}}" class="form-inline text-center" >
    @csrf
    <div class="form-group mb-2">
      <label for="staticEmail2" class="sr-only">search</label>
      <input type="text" class="form-control" name="search" placeholder="Search..." >
      <button class="btn btn-primary" name="submit">search</button>
    </div>
</form>
</div>
<div class="container">

    <div class="row justify-content-center">
        @foreach($produit as $row)

        <div class="col-md-3" style="padding-left:30px;  margin-left:70px; margin-top:20px;">
            <div class="card">

                <div class="card" style="width: 18rem;">

                    <img src="img/{{$row->image}}" class="card-img-top" alt="..." style="width:300px;height:200px">
                    <div class="card-body">
                        <h3>{{$row->title}}</h3>
                      <p class="card-text">{{$row->description}}</p>
                      <a href="/updateproduct/{{$row->idprod}}" class="btn btn-primary">update</a>
                      <a href="/deleteproduct/{{$row->idprod}}" class="btn btn-danger">delete</a>
                    </div>
                  </div>


            </div>
        </div>
        @endforeach


    </div>
</div>
@endsection
