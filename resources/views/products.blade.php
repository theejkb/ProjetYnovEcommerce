@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @foreach ($products as $product)
                    <div class="card float-lg-left marge" style="width: 17rem; margin-right: 20px; margin-bottom: 10px;">
                        <img src="{{ ('img/personnage/'.$product->img) }}" class="card-img-top " alt="">
                        <div class="card-body" h-50>
                            <h5 class="card-title"><B>{{$product->nom}}</B></h5>
                            <a href="/product/{{$product->id}}" class="btn btn-primary">Voir le champion</a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
