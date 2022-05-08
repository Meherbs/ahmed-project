@extends('layouts.app')

@section('content')
<a type="button" class="btn btn-primary">add</a>

<div class="container">

    <div class="row justify-content-center">
        @if($search)
        @foreach($search as $row)

        <div class="col-md-3" style="padding-left:30px">
            <div class="card">

                <div class="card" style="width: 18rem;">

                    <img src="img/{{$row->image}}" class="card-img-top" alt="..." style="width:300px;height:200px">
                    <div class="card-body">
                        <h3>{{$row->title}}</h3>
                      <p class="card-text">{{$row->description}}</p>
                      <a href="#" class="btn btn-primary">detais</a>
                    </div>
                  </div>


            </div>
        </div>


        @endforeach

        @endif

    </div>
</div>

@endsection
