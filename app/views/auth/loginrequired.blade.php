@extends('layouts._one_column')

@section('content')
    <section class="empty-state">
        <h1>Por favor, faça login ou cadastre-se</h1>
        <p>Você irá precisar de uma conta para fazer o que está tentando. Sem problemas, apenas se autentique usando GitHub e pronto.</p>
        <a class="button full" href="{{ action('AuthController@getLogin') }}">Login com GitHub</a>
    </section>
@stop