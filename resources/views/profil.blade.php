@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Profil</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Votre nom est : <b>{{ Auth::user()->name }}</b><br>
                        Votre adresse mail est : <b>{{ Auth::user()->email }}</b><br>
                        Date de création du compte : {{ Auth::user()->created_at }}
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header bg-dark text-white">Informations des sorties Laravel</div>

                    <div class="card-body bg-dark pb-2 text-white">
                        Auth::user()->getTable() -> {{ Auth::user()->getTable() }} <br>
                        Auth::user()->getDateFormat() -> {{ Auth::user()->getDateFormat() }}<br>
                        Auth::user()->getEmailForVerification() -> {{ Auth::user()->getEmailForVerification() }}<br>
                        Auth::user()->getAuthPassword() -> {{ Auth::user()->getAuthPassword() }}<br>
                        Auth::user()->getCreatedAtColumn() -> {{ Auth::user()->getCreatedAtColumn() }}<br>
                        Auth::user()->freshTimestampString() -> {{ Auth::user()->freshTimestampString() }}<br>
                        Auth::user()->getAuthIdentifierName() -> {{ Auth::user()->getAuthIdentifierName() }}<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
