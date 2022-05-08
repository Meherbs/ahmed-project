@extends('layouts.app')


@section('content')

            <div class="container">

            <section class="marginn" style="margin-top: 50px;">
    <section class="one" id="one">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6"  >
          <img src="https://img.freepik.com/vecteurs-libre/vendeur-tient-megaphone-main-annonce-vente-promotionnelle-pour-inviter-clients-acheter-annonce-modele-pour-promotion-annonce-au-detail-illustration-vectorielle-super-vente_1150-55438.jpg?w=2000" class="d-block mx-lg-auto img-fluid" alt="Yo wassup" width="2000"  loading="lazy" style="border-radius: 30px;">
        </div>
        <div class="col-lg-6" >
          <h1 class="display-5 fw-bold lh-1 mb-3">Meilleures affaires</h1>
          <p class="lead">Avec Affariet <span style="text-transform: lowercase;"> DEPOSEZ VOTRE ANNONCE GRATUITEMENT ! <span style="text-transform: capitalize;"> <span style="text-transform: capitalize;">Déposez une annonce gratuite en toute simplicité pour vendre, donner vos biens ou promouvoir vos services.
Avec des milliers de nouvelles annonces mises en ligne vous trouverez l’objet d’occasion ou neuf que vous désirez.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-outline-primary btn-lg px-4">
             <a class="nav-link " href="{{ route('login') }}">{{ __('Commencer') }}</a></button> 
          </div>
        </div>
      </div>
    </span>
    <div class="custom-shape-divider-bottom-1633851282">
  
    </div>
    </section>
 
   

<div class="container-fluid"  style="margin-top:50px; margin-bottom:100px; ">
  <div class="row">
    
    <div class="col color1">
      <div class="card" style="border-radius:20px; background-color:#5161ce; color:#fff; box-shadow: 0 7px 15px rgba(0, 0, 0, 0.3);">
        <div class="card-body "  >
          <h5 class="card-title"  style="text-align:center;">Immobilier</h5>
         
        </div>
      </div>
    </div>
    
    <div class="col color2">
      <div class="card" style="border-radius:20px; background-color:#5161ce; color:#fff; box-shadow: 0 7px 15px rgba(0, 0, 0, 0.3);">
        <div class="card-body">
          <h5 class="card-title"  style="text-align:center;">Véhicules</h5>
        </div>
      </div>
    </div>
    
    <div class="col color3">
      <div class="card" style="border-radius:20px; background-color:#5161ce; color:#fff;box-shadow: 0 7px 15px rgba(0, 0, 0, 0.3);">
        <div class="card-body">
          <h5 class="card-title" style="text-align:center;">Multimédia</h5>
        </div>
      </div>
    </div>

    <div class="col color3">
      <div class="card" style="border-radius:20px; background-color:#5161ce; color:#fff;box-shadow: 0 7px 15px rgba(0, 0, 0, 0.3);">
        <div class="card-body">
          <h5 class="card-title"  style="text-align:center;">Electroménager</h5>
        </div>
      </div>
    </div>

    <div class="col color3">
      <div class="card" style="border-radius:20px; background-color:#5161ce; color:#fff;box-shadow: 0 7px 15px rgba(0, 0, 0, 0.3);">
        <div class="card-body">
          <h5 class="card-title"  style="text-align:center;">Emplois</h5>
        </div>
      </div>
    </div>


    <div class="col color3">
      <div class="card" style="border-radius:20px; background-color:#5161ce; color:#fff; box-shadow: 0 7px 15px rgba(0, 0, 0, 0.3);">
        <div class="card-body">
          <h5 class="card-title"  style="text-align:center; ">Vêtements</h5>
        </div>
      </div>
    </div>


    
  </div>
 
    
    

   
    
  </div>



    
  <div><h1 style="text-align:center; margin-bottom:20px;">Annonces<h1></div>
                <div class="row ">

                
                    @foreach($produit as $row)

                    <div class="col-md-3" style="padding-left:50px:; margin-left:70px; margin-top:20px;">
                        <div class="card">

                            <div class="card" style="width: 18rem;">

                                <img src="img/{{$row->image}}" class="card-img-top" alt="..." style="width:300px;height:200px">
                                <div class="card-body">
                                    <h3>{{$row->title}}</h3>
                                  <p class="card-text">{{$row->description}}</p>

                                  <a href="/details/{{$row->idprod}}" class="btn btn-primary">details</a>
                                </div>
                              </div>


                        </div>
                    </div>
                    @endforeach



                </div>


    

                
 </div>




            
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    @endsection
