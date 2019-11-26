@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="carte flex-justify">
                    <img class="imginfo" src="{{ ('/img/personnage/'.$product->img) }}" alt="Card image cap">
                    <div class="card-body"><b>Rôle :</b> {{$product->roles}}
                        <p class="card-text">{{$product->pv}} pv</p>
                        <p class="card-text">{{$product->description}}</p>
                        <p class="card-text">{{$product->quote}}</p>
                        <a href="/personnages/{{$product->id}}/edit">Modifier le personnage </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
